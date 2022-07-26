<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:user-list');
        $this->middleware('permission:user-create', ['only' => ['create','store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
        $users = User::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('username' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('email' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('job' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('phone' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('phone2' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('whatsApp' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('address' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('bio' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('facebook' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('twitter' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('linkedin' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('instagram' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('AskFM' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('YouTube' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('level', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    })->orWhereHas('city', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('city' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    })->orWhereHas('roles', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);
        return view('admin.users.index',compact('users','request'));
    }

    public function create()
    {
        $roles = Role::pluck('name','name')->all();

        return view('admin.users.create',compact('roles'));
    }


    public function store(UserRequest $request)
    {
        $user = User::create($request->all());
        $user->password = bcrypt($request->input('password'));
        $user->assignRole($request->input('roles'));
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
        $roles = Role::pluck('name','name')->all();
        $userRole = $model->roles->pluck('name','name')->all();
        return view('admin.users.edit',compact('model','roles','userRole'));
    }

    public function update(UserRequest $request,$id)
    {
        $user = User::findOrFail($id);

        $user->update($request->all());
        $user->password = bcrypt($request->input('password'));
        DB::table('model_has_roles')->where('model_id',$id)->delete();


        $user->assignRole($request->input('roles'));
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
