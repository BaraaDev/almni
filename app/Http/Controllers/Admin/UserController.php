<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }


    public function store(UserRequest $request)
    {
        $user = User::create($request->all());
        $user->password = bcrypt($request->input('password'));
        if($request->file('photo')) {
            $user
                ->addMediaFromRequest('photo')
                ->UsingName($request->username)
                ->UsingFileName($request->username)
                ->toMediaCollection('user');
        }
        $user->save();



        return redirect()->route('users.index')
            ->with(['success' => __('home.User created successfully')]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show',compact('user'));
    }


    public function edit($id)
    {
        $model = User::findOrFail($id);
        return view('admin.users.edit',compact('model'));
    }

    public function update(UserRequest $request,$id)
    {
        $user = User::findOrFail($id);

        $user->update($request->all());
        $user->password = bcrypt($request->input('password'));
        if($request->hasFile('photo')) {
            $user
                ->clearMediaCollection('user')
                ->addMediaFromRequest('photo')
                ->UsingName($request->username)
                ->UsingFileName($request->username)
                ->toMediaCollection('user');
        }
        $user->save();


        return redirect()->route('users.index')
            ->with(['success' => __('home.User successfully edited')]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')
            ->with(['success' => __('home.User deleted successfully')]);
    }
}
