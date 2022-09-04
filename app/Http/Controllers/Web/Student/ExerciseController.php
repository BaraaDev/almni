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

class ExerciseController extends Controller
{
    public function show($id)
    {
        $user = User::status('active')->findOrFail(auth()->user()->id);
        $groups = $user->groups->pluck('id');
        $exercise = Format::whereIn('group_id',$groups)->where('type','exercise')->findOrFail($id);
        $questions = Question::inRandomOrder()->where('format_id', $exercise->id)->limit(10)->get();

        return view('web.students.exercise',compact('exercise','questions'));
    }

    public function store(Request $request,$id)
    {
        $user = User::status('active')->findOrFail(auth()->user()->id);
        $groups = $user->groups->pluck('id');
        $exercise = Format::whereIn('group_id',$groups)->where('type','exercise')->findOrFail($id);
        $result = 0;
        $test = Test::create([
            'user_id' => Auth::id(),
            'format_id'   => $exercise->id,
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
                'format_id'   => $exercise->id,
                'option_id'   => $request->input('answers.'.$question),
                'correct'     => $status,
            ]);
        }
        $test->update(['result' => $result]);
        dd($result);

        return redirect()->route('result',[$test->id]);
    }

}
