<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LevelRequest;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:level-list');
        $this->middleware('permission:level-create', ['only' => ['create','store']]);
        $this->middleware('permission:level-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:level-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $levels = Level::all();
        return view('admin.levels.index',compact('levels'));
    }

    public function create()
    {
        return view('admin.levels.create');
    }

    public function store(LevelRequest $request)
    {
        $user = Level::create($request->all());

        return redirect()->route('levels.index')
            ->with(['success' => __('level.Level created successfully')]);
    }
    public function edit($id)
    {
        $model = Level::findOrFail($id);
        return view('admin.levels.edit',compact('model'));
    }

    public function update(LevelRequest $request,$id)
    {
        $user = Level::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('levels.index')
            ->with(['success' => __('level.Level successfully edited')]);
    }

    public function destroy($id)
    {
        $levels = Level::findOrFail($id);
        $levels->delete();
        return redirect()->route('levels.index')
            ->with(['success' => __('level.Level deleted successfully')]);
    }
}
