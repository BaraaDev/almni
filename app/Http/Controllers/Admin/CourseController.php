<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Random;
use Illuminate\Support\Str;

class CourseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:course-list');
        $this->middleware('permission:course-create', ['only' => ['create','store']]);
        $this->middleware('permission:course-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:course-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $courses = Course::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('title' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('description' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('course_date' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('price' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('discount' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('level', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('level' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    })->orWhereHas('subject', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    })->orWhereHas('category', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    })->orWhereHas('courseInstructor', function ($q) use ($request){
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
        $subjects = Subject::limit(4)->get();


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See courses'));
        return view('admin.courses.index',compact('courses','subjects','request'));
    }

    public function create()
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See create courses'));

        return view('admin.courses.create');
    }

    public function store(CourseRequest $request)
    {
        $course = Course::create($request->all());
        $course->slug  = Str::slug($request->title);
        $course->courseInstructor()->sync($request->instructor_id);
        if($request->hasFile('image')) {
            $course
                ->addMediaFromRequest('image')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('coursePC');
        }

        if($request->file('video')) {
            $course
                ->addMediaFromRequest('video')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('videoCourse');
        }
        $course->save();


        activity()
            ->performedOn($course)
            ->event(__('home.create'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.create new course'));
        return redirect()->route('courses.index')
            ->with(['success' => __('course.Course created successfully')]);
    }

    public function show($id)
    {
        $model = Course::findOrFail($id);


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See show courses'));

        return view('admin.courses.show',compact('model'));
    }

    public function edit($id)
    {
        $model = Course::findOrFail($id);


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See edit courses'));
        return view('admin.courses.edit',compact('model'));
    }

    public function update(CourseRequest $request,$id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());
        $course->slug  = Str::slug($request->title);
        $course->courseInstructor()->sync($request->instructor_id);
        if($request->file('image')) {
            $course
                ->clearMediaCollection('course')
                ->addMediaFromRequest('image')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('course');
        }


        if($request->file('video')) {
            $course
                ->clearMediaCollection('videoCourse')
                ->addMediaFromRequest('video')
                ->UsingName(Random::generate('30'))
                ->UsingFileName(Random::generate('30'))
                ->toMediaCollection('videoCourse');
        }
        $course->save();


        activity()
            ->performedOn($course)
            ->event(__('home.update'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.update course'));

        return redirect()->route('courses.index')
            ->with(['success' => __('course.Course successfully edited')]);
    }

    public function destroy($id)
    {
        $courses = Course::findOrFail($id);
        $courses->delete();


        activity()
            ->event(__('home.delete'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.delete course'));
        return redirect()->route('courses.index')
            ->with(['success' => __('course.Course deleted successfully')]);
    }
}
