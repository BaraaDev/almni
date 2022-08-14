<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassroomRequest;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Random;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:classrooms-list');
        $this->middleware('permission:classrooms-create', ['only' => ['create','store']]);
        $this->middleware('permission:classrooms-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:classrooms-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
        $classrooms = Classroom::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
            }})->paginate(25);


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See classrooms'));
        return view('admin.classrooms.index',compact('classrooms','request'));
    }

    public function create()
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See create classrooms'));
        return view('admin.classrooms.create');
    }

    public function store(ClassroomRequest $request)
    {
        $classrooms = Classroom::create($request->all());

        if($request->file('photo')) {
            $classrooms
                ->addMediaFromRequest('photo')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('classroom');
        }
        $classrooms->save();


        activity()
            ->performedOn($classrooms)
            ->event(__('home.create'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.create new classrooms'));
        return redirect()->route('classrooms.index')
            ->with(['success' => __('classrooms.Classroom created successfully')]);
    }
    public function edit($id)
    {
        $model = Classroom::findOrFail($id);


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See show classrooms'));
        return view('admin.classrooms.edit',compact('model'));
    }

    public function update(ClassroomRequest $request,$id)
    {
        $classrooms = Classroom::findOrFail($id);
        $classrooms->update($request->all());

        if($request->file('photo')) {
            $classrooms
                ->clearMediaCollection('classroom')
                ->addMediaFromRequest('photo')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('classroom');
        }
        $classrooms->save();

        activity()
            ->performedOn($classrooms)
            ->event(__('home.update'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.update classrooms'));
        return redirect()->route('classrooms.index')
            ->with(['success' => __('classrooms.Classroom successfully edited')]);
    }

    public function destroy($id)
    {
        $classrooms = Classroom::findOrFail($id);
        $classrooms->delete();


        activity()
            ->event(__('home.delete'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.delete classrooms'));
        return redirect()->route('classrooms.index')
            ->with(['success' => __('classrooms.Classroom deleted successfully')]);
    }
}
