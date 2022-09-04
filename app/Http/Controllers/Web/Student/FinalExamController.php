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


class FinalExamController extends Controller
{
    public function show($id)
    {
        $user = User::status('active')->findOrFail(auth()->user()->id);
        $groups = $user->groups->pluck('id');
        $finalExam = Format::whereIn('group_id',$groups)->where('type','final_exam')->findOrFail($id);
        $questions = Question::inRandomOrder()->where('format_id', $finalExam->id)->limit(10)->get();

        return view('web.students.final-exam',compact('finalExam','questions'));
    }

    public function store(Request $request,$id)
    {
        $user = User::status('active')->findOrFail(auth()->user()->id);
        $groups = $user->groups->pluck('id');
        $finalExam = Format::whereIn('group_id',$groups)->where('type','final_exam')->findOrFail($id);
        $result = 0;
        $test = Test::create([
            'user_id' => Auth::id(),
            'format_id'   => $finalExam->id,
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
                'format_id'   => $finalExam->id,
                'option_id'   => $request->input('answers.'.$question),
                'correct'     => $status,
            ]);
        }
        $test->update(['result' => $result]);

        $levelUser = Level::where('id','>',$user->level_id)->first();
        $user->update(['level_id' => $levelUser->id]);
//        $levelGroup = Level::where('id','>',$finalExam->group->level_id)->first();
//        $finalExam->group->update(['level_id',$levelGroup->id]);

        return redirect()->route('final-exam.result',[$test->id]);
    }

    public function result($id)
    {
        $test = Test::find($id)->load('user');

        if ($test) {
            $results = TestAnswer::where('test_id', $id)
                ->with('questions')
                ->with('questions.options')
                ->get();
        }
        return view('web.students.result',compact('test','results'));
    }
}
