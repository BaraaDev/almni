<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GroupRequest;
use App\Models\Group;
use Illuminate\Http\Request;

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


    public function index()
    {
        $groups = Group::all();
        return view('admin.groups.index',compact('groups'));
    }

    public function create()
    {
        return view('admin.groups.create');
    }

    public function store(GroupRequest $request)
    {
        $user = Group::create($request->all());

        return redirect()->route('groups.index')
            ->with(['success' => __('group.Group created successfully')]);
    }
    public function edit($id)
    {
        $model = Group::findOrFail($id);
        return view('admin.groups.edit',compact('model'));
    }

    public function update(GroupRequest $request,$id)
    {
        $user = Group::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('groups.index')
            ->with(['success' => __('group.Group successfully edited')]);
    }

    public function destroy($id)
    {
        $groups = Group::findOrFail($id);
        $groups->delete();
        return redirect()->route('groups.index')
            ->with(['success' => __('group.Group deleted successfully')]);
    }
}
