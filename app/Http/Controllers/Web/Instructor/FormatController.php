<?php

namespace App\Http\Controllers\Web\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Format;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FormatController extends Controller
{
    public function index()
    {
        $formats = Format::where('instructor_id',auth()->user()->id)->get();
        return view('web.instructors.formats.index',compact('formats'));
    }

    public function create()
    {
        return view('web.instructors.formats.create');
    }


    public function store(Request $request)
    {
        $format = Format::create($request->all());
        $format->instructor_id = auth()->user()->id;
        $format->save();

        return redirect(route('questions.create'))
            ->with(['success' => __('question.format created successfully')]);
    }


    public function show($id)
    {
        $format = Format::where('instructor_id',auth()->user()->id)->findOrFail($id);
        $questions = Question::where('format_id',$format->id)->with('options')->get();

        return view('web.instructors.formats.show',compact('format','questions'));
    }


    public function edit($id)
    {
        $format = Format::where('instructor_id',auth()->user()->id)->findOrFail($id);
        return view('web.instructors.formats.edit',compact('format'));
    }


    public function update(Request $request, $id)
    {
        $format = Format::where('instructor_id',auth()->user()->id)->findOrFail($id);
        $format->update($request->all());
        $format->instructor_id = auth()->user()->id;
        $format->save();


        return redirect()->route('formats.show',$format->id)
            ->with(['success' => __('question.format updated successfully')]);
    }

    public function destroy($id)
    {
        $format = Format::where('instructor_id',auth()->user()->id)->findOrFail($id);
        $format->delete();
        return redirect()->back()
            ->with(['success' => __('question.format deleted successfully')]);
    }

}
