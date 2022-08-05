<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LevelRequest;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function index(Request $request)
    {
        $levels = Level::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('level' , 'LIKE' , '%'.$request->keyword.'%');
            }})->paginate(25);


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See levels'));
        return view('admin.levels.index',compact('levels','request'));
    }

    public function create()
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See create levels'));

        return view('admin.levels.create');
    }

    public function store(LevelRequest $request)
    {
        $level = Level::create($request->all());

        activity()
            ->performedOn($level)
            ->event(__('home.create'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.create new lecture'));
        return redirect()->route('levels.index')
            ->with(['success' => __('level.Level created successfully')]);
    }
    public function edit($id)
    {
        $model = Level::findOrFail($id);

        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See edit levels'));
        return view('admin.levels.edit',compact('model'));
    }

    public function update(LevelRequest $request,$id)
    {
        $level = Level::findOrFail($id);
        $level->update($request->all());

        activity()
            ->performedOn($level)
            ->event(__('home.update'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.update level'));

        return redirect()->route('levels.index')
            ->with(['success' => __('level.Level successfully edited')]);
    }

    public function destroy($id)
    {
        $levels = Level::findOrFail($id);
        $levels->delete();

        activity()
            ->event(__('home.delete'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.delete level'));
        return redirect()->route('levels.index')
            ->with(['success' => __('level.Level deleted successfully')]);
    }
}
