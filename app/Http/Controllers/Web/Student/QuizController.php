<?php

namespace App\Http\Controllers\Web\Student;

use App\Http\Controllers\Controller;
use App\Models\Format;
use App\Models\Level;
use App\Models\Question;
use App\Models\QuestionsOption;
use App\Models\Test;
use App\Models\TestAnswer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function show($id)
    {
        $user = User::status('active')->findOrFail(auth()->user()->id);
        $groups = $user->groups->pluck('id');
        $quiz = Format::whereIn('group_id',$groups)->where('type','test')->findOrFail($id);
        $questions = Question::inRandomOrder()->where('format_id', $quiz->id)->limit(10)->get();

        return view('web.students.quizzes',compact('quiz','questions'));
    }

    public function store(Request $request,$id)
    {
        $user = User::status('active')->findOrFail(auth()->user()->id);
        $groups = $user->groups->pluck('id');
        $quiz = Format::whereIn('group_id',$groups)->where('type','test')->findOrFail($id);
        $result = 0;
        $test = Test::create([
            'user_id' => Auth::id(),
            'format_id'   => $quiz->id,
            'result'  => $result,
        ]);

        foreach ($request->input('questions', []) as $key => $question) {
            $status = 0;

            if ($request->input('answers.'.$question) != null
                && QuestionsOption::find($request->input('answers.'.$question))->correct
            ) {
                $status = 1;
                $result++;
            }
            TestAnswer::create([
                'user_id'     => Auth::id(),
                'test_id'     => $test->id,
                'question_id' => $question,
                'format_id'   => $quiz->id,
                'option_id'   => $request->input('answers.'.$question),
                'correct'     => $status,
            ]);
        }
        $test->update(['result' => $result]);


        return redirect()->route('result',[$test->id]);
    }
}
