<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use Illuminate\Http\Request;
use Nette\Utils\Random;
use function Ramsey\Uuid\v1;

class LectureController extends Controller
{

    public function index()
    {
        $lectures = Lecture::all();
        return view('admin.lectures.index',compact('lectures'));
    }


    public function create()
    {
        return view('admin.lectures.create');
    }


    public function store(Request $request)
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


    public function update(Request $request, $id)
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
                ->UsingName(Random::generate('30'))
                ->UsingFileName(Random::generate('30'))
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
