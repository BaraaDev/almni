<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class StudentController extends Controller
{

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

    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->password = bcrypt($request->input('password'));
        $user->userType = 'student';
        $user->groups()->sync($request->group_id);

        if($request->file('photo')) {
            $user
                ->addMediaFromRequest('photo')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('user');
        }
        $user->save();

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
        $user = User::findOrFail($id);

        $user->update($request->all());
        $user->password = bcrypt($request->input('password'));
        if($request->hasFile('photo')) {
            $user
                ->clearMediaCollection('user')
                ->addMediaFromRequest('photo')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('user');
        }
        $user->save();


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
