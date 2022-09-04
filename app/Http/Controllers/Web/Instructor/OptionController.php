<?php

namespace App\Http\Controllers\Web\Instructor;

use App\Http\Controllers\Controller;
use App\Models\QuestionsOption;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index()
    {

        $option = QuestionsOption::where('instructor_id',auth()->user()->id)->get();
        return view('web.instructors.options.index',compact('option'));
    }


    public function create()
    {
        return view('web.instructors.options.create');
    }

    public function store(Request $request)
    {
        $option = QuestionsOption::create($request->all());
        $option->instructor_id = auth()->user()->id;
        $option->save();

        return redirect(route('questions.show',$option->question_id))
            ->with(['success' => __('question.option created successfully')]);
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $option = QuestionsOption::where('instructor_id',auth()->user()->id)->findOrFail($id);
        return view('web.instructors.options.edit',compact('option'));
    }


    public function update(Request $request, $id)
    {
        $option = QuestionsOption::where('instructor_id',auth()->user()->id)->findOrFail($id);
        $option->update($request->all());
        $option->instructor_id = auth()->user()->id;
        $option->save();

        return redirect()->route('options.show',$option->id)
            ->with(['success' => __('question.option updated successfully')]);
    }

    public function destroy($id)
    {
        $option = QuestionsOption::where('instructor_id',auth()->user()->id)->findOrFail($id);
        $option->delete();
        return redirect()->back()
            ->with(['success' => __('question.option deleted successfully')]);
    }
}
