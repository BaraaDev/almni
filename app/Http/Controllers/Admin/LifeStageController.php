<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LifeStageRequest;
use App\Models\LifeStage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LifeStageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:life-stage-list');
        $this->middleware('permission:life-stage-create', ['only' => ['create','store']]);
        $this->middleware('permission:life-stage-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:life-stage-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $life_stages = LifeStage::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('stage' , 'LIKE' , '%'.$request->keyword.'%')
                ->where('description' , 'LIKE' , '%'.$request->keyword.'%');
            }})->paginate(25);


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See life stages'));
        return view('admin.life_stages.index',compact('life_stages','request'));
    }

    public function create()
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See create life stages'));

        return view('admin.life_stages.create');
    }

    public function store(LifeStageRequest $request)
    {
        $life_stage = LifeStage::create($request->all());

        activity()
            ->performedOn($life_stage)
            ->event(__('home.create'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.create new life stage'));
        return redirect()->route('life-stages.index')
            ->with(['success' => __('life_stage.Life Stage created successfully')]);
    }
    public function edit($id)
    {
        $model = LifeStage::findOrFail($id);

        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See edit life stages'));
        return view('admin.life_stages.edit',compact('model'));
    }

    public function update(LifeStageRequest $request,$id)
    {
        $life_stage = LifeStage::findOrFail($id);
        $life_stage->update($request->all());

        activity()
            ->performedOn($life_stage)
            ->event(__('home.update'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.update life stage'));

        return redirect()->route('life-stages.index')
            ->with(['success' => __('life_stage.Life Stage successfully edited')]);
    }

    public function destroy($id)
    {
        $life_stages = LifeStage::findOrFail($id);
        $life_stages->delete();

        activity()
            ->event(__('home.delete'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.delete life stage'));
        return redirect()->route('life-stages.index')
            ->with(['success' => __('life_stage.Life Stage deleted successfully')]);
    }
}
