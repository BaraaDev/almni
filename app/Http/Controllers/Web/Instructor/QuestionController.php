<?php

namespace App\Http\Controllers\Web\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionsOption;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::where('instructor_id',auth()->user()->id)->get();
        return view('web.instructors.questions.index',compact('questions'));
    }

    public function create()
    {
        $correct_options = [
            'option1' => __('question.Option 1'),
            'option2' => __('question.Option 2'),
            'option3' => __('question.Option 3'),
            'option4' => __('question.Option 4')
        ];
        return view('web.instructors.questions.create',compact('correct_options'));
    }

    public function store(Request $request)
    {
        $question = Question::create($request->all());
        foreach ($request->input() as $key => $value) {
            if(strpos($key, 'option') !== false && $value != '') {
                $status = $request->input('correct') == $key ? 1 : 0;
                QuestionsOption::create([
                    'question_id' => $question->id,
                    'option'      => $value,
                    'correct'     => $status
                ]);
            }
        }
        $question->instructor_id = auth()->user()->id;
        $question->save();


        return redirect()->route('questions.create')
            ->with(['success' => __('question.question created successfully')]);
    }

    public function show($id)
    {
        $question = Question::where('instructor_id',auth()->user()->id)->findOrFail($id);
        return view('web.instructors.questions.show',compact('question'));
    }

    public function edit($id)
    {
        $correct_options = [
            'option1' => __('question.Option 1'),
            'option2' => __('question.Option 2'),
            'option3' => __('question.Option 3'),
            'option4' => __('question.Option 4')
        ];
        $question = Question::where('instructor_id',auth()->user()->id)->findOrFail($id);
        return view('web.instructors.questions.edit',compact('question','correct_options'));
    }

    public function update(Request $request, $id)
    {
        $question = Question::where('instructor_id',auth()->user()->id)->findOrFail($id);
        $question->update($request->all());
        $question->instructor_id = auth()->user()->id;
        $question->save();


        return redirect()->route('questions.index')
            ->with(['success' => __('question.question updated successfully')]);
    }

    public function destroy($id)
    {
        $question = Question::where('instructor_id',auth()->user()->id)->findOrFail($id);
        $question->delete();
        return redirect()->route('questions.index')
            ->with(['success' => __('question.question deleted successfully')]);
    }
}
