<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\UserRequest;
use App\Models\Category;
use App\Models\Classroom;
use App\Models\Level;
use App\Models\LifeStage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Random;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:student-list');
        $this->middleware('permission:student-create', ['only' => ['create','store']]);
        $this->middleware('permission:student-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:student-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $allStudents = User::status('active')->type('student')->count();
        $levels = Level::all();
        $classes = Classroom::all();
        $life_stages = LifeStage::all();
        $categories = Category::all();
        $students = User::type('student')->orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('nickname' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('email' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('phone' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('phone2' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('whatsApp' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('address' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('level', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    })->orWhereHas('city', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('city' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    })->orWhereHas('groups', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('description' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);

        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See students'));
        return view('admin.users.students.index',compact('allStudents',
            'classes','students','request','levels','life_stages','categories'));
    }


    public function create()
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See create students'));

        return view('admin.users.students.create');
    }

    public function store(StudentRequest $request)
    {
        $student = User::create($request->all());
        $student->groups()->sync($request->group_id);
        $student->password = bcrypt($request->input('password'));
        $student->userType = 'student';
        $student->groups()->sync($request->group_id);
        $student->courseStudent()->sync($request->course_id);

        if($request->file('photo')) {
            $student
                ->addMediaFromRequest('photo')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('user');
        }
        $student->save();

        activity()
            ->performedOn($student)
            ->event(__('home.create'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.create new student'));

        return redirect()->route('students.index')
            ->with(['success' => __('home.User created successfully')]);
    }
    public function edit($id)
    {
        $model = User::findOrFail($id);
        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See edit students'));
        return view('admin.users.students.edit',compact('model'));
    }

    public function update(Request $request,$id)
    {
        $student = User::findOrFail($id);
        $student->groups()->sync($request->group_id);
        $student->courseStudent()->sync($request->course_id);
        $student->update($request->all());
        $student->password = bcrypt($request->input('password'));
        $student->userType = 'student';
        if($request->hasFile('photo')) {
            $student
                ->clearMediaCollection('user')
                ->addMediaFromRequest('photo')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('user');
        }
        $student->save();

        activity()
            ->performedOn($student)
            ->event(__('home.update'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.update student'));

        return redirect()->route('students.index')
            ->with(['success' => __('home.User successfully edited')]);
    }

    public function destroy($id)
    {
        $students = User::findOrFail($id);
        $students->delete();

        activity()
            ->event(__('home.delete'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.delete student'));
        return redirect()->route('students.index')
            ->with(['success' => __('home.User deleted successfully')]);
    }


    public function waiting(Request $request)
    {
        $users = User::status('waiting')->type('student')->orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('nickname' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('email' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('phone' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('phone2' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('whatsApp' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('address' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('level', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    })->orWhereHas('city', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('city' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    })->orWhereHas('groups', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('description' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);

        activity()
            ->event(__('home.delete'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.See waiting students'));
        return view('admin.users.students.waiting',compact('users','request'));
    }


}
