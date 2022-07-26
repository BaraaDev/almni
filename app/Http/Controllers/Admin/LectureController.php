<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LectureRequest;
use App\Models\Lecture;
use Illuminate\Http\Request;
use Nette\Utils\Random;
use function Ramsey\Uuid\v1;

class LectureController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:lecture-list');
        $this->middleware('permission:lecture-create', ['only' => ['create','store']]);
        $this->middleware('permission:lecture-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:lecture-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $lectures = Lecture::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('description' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('course_date' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('price' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('discount' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('course', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('title' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('description' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('course_date' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('price' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('discount' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    })->orWhereHas('group', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                            ->orWhere('description' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    })->orWhereHas('instructor', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('nickname' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('email' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('phone' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('phone2' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('whatsApp' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('address' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('facebook' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('twitter' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('linkedin' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);
        return view('admin.lectures.index',compact('lectures','request'));
    }


    public function create()
    {
        return view('admin.lectures.create');
    }


    public function store(LectureRequest $request)
    {
        $lecture = Lecture::create($request->all());

        if($request->hasFile('image')) {
            $lecture
                ->addMediaFromRequest('image')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('lecturePC');
        }

        if($request->hasFile('pdf')) {
            $lecture
                ->addMediaFromRequest('pdf')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('lecturePDF');
        }

        if($request->file('video')) {
            $lecture
                ->addMediaFromRequest('video')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('videoLecture');
        }
        $lecture->save();

        return redirect()->route('lectures.index')
            ->with(['success' => __('lecture.Lecture created successfully')]);
    }


    public function show($id)
    {
        $model = Lecture::findOrFail($id);
        return view('admin.lectures.show',compact('model'));
    }


    public function edit($id)
    {
        $model = Lecture::findOrFail($id);
        return view('admin.lectures.edit',compact('model'));
    }


    public function update(LectureRequest $request, $id)
    {
        $lecture = Lecture::findOrFail($id);
        $lecture->update($request->all());

        if($request->file('image')) {
            $lecture
                ->clearMediaCollection('lecturePC')
                ->addMediaFromRequest('image')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('lecturePC');
        }


        if($request->file('pdf')) {
            $lecture
                ->clearMediaCollection('lecturePDF')
                ->addMediaFromRequest('pdf')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('lecturePDF');
        }


        if($request->file('video')) {
            $lecture
                ->clearMediaCollection('videoLecture')
                ->addMediaFromRequest('video')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('videoLecture');
        }
        $lecture->save();


        return redirect()->route('lectures.index')
            ->with(['success' => __('lecture.Lecture successfully edited')]);
    }


    public function destroy($id)
    {
        $lecture = Lecture::findOrFail($id);
        $lecture->delete();
        return redirect()->route('lectures.index')
            ->with(['success' => __('lecture.Lecture deleted successfully')]);
    }
}
