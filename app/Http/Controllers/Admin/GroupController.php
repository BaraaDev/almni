<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GroupRequest;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Group;
use App\Models\GroupStudent;
use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GroupController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:group-list');
        $this->middleware('permission:group-create', ['only' => ['create','store']]);
        $this->middleware('permission:group-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:group-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
        $levels = Level::all();
        $classes = Classroom::all();
        $courses = Course::all();
        $groups = Group::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('description' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('level', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('level' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    })->orWhereHas('course', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('title' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('description' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('course_date' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('price' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('discount' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See groups'));
        return view('admin.groups.index',compact('groups','request','levels','classes','courses'));
    }

    public function create()
    {

        $instructors = User::status('active')->type('instructor')->pluck('name','id');
        $students = User::status('waiting')->type('student')
            ->whereNotIn('id',DB::table('group_student')
                ->select('student_id')
                ->pluck('student_id'))
            ->pluck('name','id');
        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See create groups'));
        return view('admin.groups.create',compact('students','instructors'));
    }

    public function store(GroupRequest $request)
    {
        $group = Group::create($request->all());
        $group->students()->sync($request->student_id);
        $group->instructor()->sync($request->user_id);
        $group['days']        = $request->days;
        $group->save();
        activity()
            ->performedOn($group)
            ->event(__('home.create'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.create new group'));
        return redirect()->route('groups.index')
            ->with(['success' => __('group.Group created successfully')]);
    }

    public function edit($id)
    {
        $model = Group::findOrFail($id);

        $instructors = User::status('active')->type('instructor')->pluck('name','id');
        $students = User::status('waiting')->type('instructors')
            ->whereNotIn('id',DB::table('group_student')
                ->select('student_id')
                ->pluck('student_id'))
            ->pluck('name','id');
        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See edit groups'));
        return view('admin.groups.edit',compact('model','instructors','students'));
    }

    public function update(GroupRequest $request,$id)
    {
        $group = Group::findOrFail($id);
        $group->update($request->all());
        $group->students()->sync($request->student_id);
        $group->instructor()->sync($request->user_id);
        $group->save();
        activity()
            ->performedOn($group)
            ->event(__('home.update'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.delete group'));
        return redirect()->route('groups.index')
            ->with(['success' => __('group.Group successfully edited')]);
    }

    public function destroy($id)
    {
        $groups = Group::findOrFail($id);
        $groups->delete();

        activity()
            ->event(__('home.delete'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.delete group'));
        return redirect()->route('groups.index')
            ->with(['success' => __('group.Group deleted successfully')]);
    }

    public function student($id)
    {
        $group = Group::findOrFail($id);

        return view('admin.groups.student',compact('group'));
    }

    public function arrival(Request $request)
    {

        $ad = DB::table('arrival_missed')->insert(
            [
                'arrival_missed'        => $request->arrival,
                'student_id'            => $request->student_id,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ]
        );
        return redirect()->back()
            ->with(['success' => __('group.Attendance has been registered successfully')]);
    }

    public function missed(Request $request)
    {

        $ad = DB::table('arrival_missed')->insert(
            [
                'arrival_missed'            => $request->missed,
                'student_id'            => $request->student_id,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ]
        );
        return redirect()->back()
            ->with(['success' => __('group.Attendance has been registered successfully')]);
    }
}
