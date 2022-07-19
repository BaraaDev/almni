<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $subjects = Subject::limit(4)->get();
        return view('admin.courses.index',compact('courses','subjects'));
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(Request $request)
    {
        $course = Course::create($request->all());

        if($request->hasFile('image')) {
            $course
                ->addMediaFromRequest('image')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('course');
        }

        if($request->file('video')) {
            $course
                ->addMediaFromRequest('video')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('videoCourse');
        }
        $course->save();

        return redirect()->route('courses.index')
            ->with(['success' => __('course.Course created successfully')]);
    }

    public function show($id)
    {
        $model = Course::findOrFail($id);
        return view('admin.courses.show',compact('model'));
    }

    public function edit($id)
    {
        $model = Course::findOrFail($id);
        return view('admin.courses.edit',compact('model'));
    }

    public function update(CourseRequest $request,$id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());

        if($request->file('image')) {
            $course
                ->clearMediaCollection('course')
                ->addMediaFromRequest('image')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('course');
        }
        $course->save();


        if($request->file('video')) {
            $course
                ->clearMediaCollection('videoCourse')
                ->addMediaFromRequest('video')
                ->UsingName(Random::generate('30'))
                ->UsingFileName(Random::generate('30'))
                ->toMediaCollection('videoCourse');
        }
        $course->save();


        return redirect()->route('courses.index')
            ->with(['success' => __('course.Course successfully edited')]);
    }

    public function destroy($id)
    {
        $courses = Course::findOrFail($id);
        $courses->delete();
        return redirect()->route('courses.index')
            ->with(['success' => __('course.Course deleted successfully')]);
    }
}
