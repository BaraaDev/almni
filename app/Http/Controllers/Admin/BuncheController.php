<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuncheRequest;
use App\Models\Bunche;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuncheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:bunches-list');
        $this->middleware('permission:bunches-create', ['only' => ['create','store']]);
        $this->middleware('permission:bunches-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:bunches-delete', ['only' => ['destroy']]);
        $this->middleware('permission:reports-bunches', ['only' => ['bunches']]);
    }


    public function index(Request $request)
    {
        $users = User::orderBy('id','DESC')->status('active')->type('student')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('job' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('salary' , 'LIKE' , '%'.$request->keyword.'%');
            }})->paginate(25);
        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See bunches'));

        return view('admin.bunches.index',compact('users','request'));
    }

    public function bunches(Request $request)
    {
        $bunches = Bunche::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('price' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('deposit' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('date' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('user', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    })->orWhereHas('course', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('title' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    })->orWhereHas('group', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);
        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See reports bunches'));

        return view('admin.reports.bunche',compact('bunches','request'));
    }

    public function store(BuncheRequest $request)
    {
        $bunche = Bunche::create($request->all());

        activity()
            ->performedOn($bunche)
            ->event(__('home.create'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.create new bunche'));

        return redirect()->route('reports.bunches')
            ->with(['success' => __('bunche.Bunche created successfully')]);
    }

    public function edit($id)
    {
        $model = Bunche::findOrFail($id);


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See edit bunches'));
        return view('admin.bunches.edit',compact('model'));
    }

    public function update(BuncheRequest $request,$id)
    {
        $bunche = Bunche::findOrFail($id);
        $bunche->update($request->all());


        activity()
            ->performedOn($bunche)
            ->event(__('home.update'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.update bunche'));
        return redirect()->route('reports.bunches')
            ->with(['success' => __('bunche.Bunche successfully edited')]);
    }

    public function destroy($id)
    {
        $bunches = Bunche::findOrFail($id);
        $bunches->delete();


        activity()
            ->event(__('home.delete'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.delete bunche'));
        return redirect()->route('reports.bunches')
            ->with(['success' => __('bunche.Bunche deleted successfully')]);
    }
}
