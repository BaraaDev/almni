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

    public function index()
    {
        $allStudents = User::count();
        $students = User::status('active')->type('student')->get();
        return view('admin.users.students.index',compact('allStudents','students'));
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


    public function waiting()
    {
        $users = User::status('stopped')->type('student')->get();
        return view('admin.users.students.waiting',compact('users'));
    }


}
