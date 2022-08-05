<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubjectRequest;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Random;

class SubjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:subject-list');
        $this->middleware('permission:subject-create', ['only' => ['create','store']]);
        $this->middleware('permission:subject-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:subject-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
        $subjects = Subject::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
            }})->paginate(25);

        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See subjects'));
        return view('admin.subjects.index',compact('subjects','request'));
    }

    public function create()
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See create subjects'));

        return view('admin.subjects.create');
    }

    public function store(SubjectRequest $request)
    {
        $subject = Subject::create($request->all());

        if($request->hasFile('image')) {
            $subject
                ->addMediaFromRequest('image')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('subject');
        }
        $subject->save();

        activity()
            ->performedOn($subject)
            ->event(__('home.create'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.create new subject'));

        return redirect()->route('subjects.index')
            ->with(['success' => __('subject.Subject created successfully')]);
    }
    public function edit($id)
    {
        $model = Subject::findOrFail($id);

        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See edit subjects'));


        return view('admin.subjects.edit',compact('model'));
    }

    public function update(SubjectRequest $request,$id)
    {
        $subject = Subject::findOrFail($id);
        $subject->update($request->all());

        if($request->file('image')) {
            $subject
                ->clearMediaCollection('subject')
                ->addMediaFromRequest('image')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('subject');
        }
        $subject->save();

        activity()
            ->performedOn($subject)
            ->event(__('home.update'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.update subject'));


        return redirect()->route('subjects.index')
            ->with(['success' => __('subject.Subject successfully edited')]);
    }

    public function destroy($id)
    {
        $subjects = Subject::findOrFail($id);
        $subjects->delete();

        activity()
            ->event(__('home.delete'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.delete subject'));
        return redirect()->route('subjects.index')
            ->with(['success' => __('subject.Subject deleted successfully')]);
    }
}
