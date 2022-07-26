<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:role-list');
        $this->middleware('permission:role-create', ['only' => ['create','store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
        $roles = Role::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
            }})->paginate(25);

        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See roles'));
        return view('admin.roles.index',compact('roles','request'));
    }


    public function create()
    {
        $permission = Permission::get();

        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See create roles'));
        return view('admin.roles.create',compact('permission'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|unique:roles,name',
            'permission'    => 'required',
        ]);


        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));


        activity()
            ->performedOn($role)
            ->event(__('home.create'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.create new role'));
        return redirect()->route('roles.index')
            ->with(['success',__('role.Role created successfully')]);
    }


    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();

        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See show roles'));
        return view('admin.roles.show',compact('role','rolePermissions'));
    }


    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")
            ->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See edit roles'));

        return view('admin.roles.edit',compact('role','permission','rolePermissions'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'       => 'required',
            'permission' => 'required',
        ]);


        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
        $role->syncPermissions($request->input('permission'));

        activity()
            ->performedOn($role)
            ->event(__('home.update'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.update role'));

        return redirect()->route('roles.index')
            ->with(['success',__('role.Role updated successfully')]);
    }


    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();

        activity()
            ->event(__('home.delete'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.delete role'));

        return redirect()->route('roles.index')
            ->with(['success',__('role.Role deleted successfully')]);
    }
}
