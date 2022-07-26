<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
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
        $allStudents = User::count();
        $students = User::status('active')->type('student')->orderBy('id','DESC')->where(function ($q) use($request){
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
        return view('admin.users.students.index',compact('allStudents','students','request'));
    }


    public function create()
    {
        return view('admin.users.students.create');
    }

    public function store(StudentRequest $request)
    {
        $student = User::create($request->all());
        $student->groups()->sync($request->group_id);
        $student->password = bcrypt($request->input('password'));
        $student->userType = 'student';
        $student->groups()->sync($request->group_id);

        if($request->file('photo')) {
            $student
                ->addMediaFromRequest('photo')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('user');
        }
        $student->save();

        return redirect()->route('students.index')
            ->with(['success' => __('home.User created successfully')]);
    }
    public function edit($id)
    {
        $model = User::findOrFail($id);
        return view('admin.users.students.edit',compact('model'));
    }

    public function update(Request $request,$id)
    {
        $student = User::findOrFail($id);
        $student->groups()->sync($request->group_id);
        $student->update($request->all());
        $student->password = bcrypt($request->input('password'));
        if($request->hasFile('photo')) {
            $student
                ->clearMediaCollection('user')
                ->addMediaFromRequest('photo')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('user');
        }
        $student->save();


        return redirect()->route('students.index')
            ->with(['success' => __('home.User successfully edited')]);
    }

    public function destroy($id)
    {
        $students = User::findOrFail($id);
        $students->delete();
        return redirect()->route('students.index')
            ->with(['success' => __('home.User deleted successfully')]);
    }


    public function waiting(Request $request)
    {
        $users = User::status('stopped')->type('student')->orderBy('id','DESC')->where(function ($q) use($request){
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
        return view('admin.users.students.waiting',compact('users','request'));
    }


}
