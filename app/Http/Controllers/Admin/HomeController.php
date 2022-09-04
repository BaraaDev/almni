<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::type('admin')->count();
        $students = User::type('student')->count();
        $instructor = User::type('instructor')->count();


        $users = User::status('active')->select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count', 'month_name');

        $labels = $users->keys();
        $data = $users->values();

//        dd($users);
        return view('admin.home',compact('user','students','instructor','labels','data'));
    }

    public function activity_log()
    {
        $activities = Activity::orderBy('created_at','DESC')->paginate(25);

        return view('admin.activity.index',compact('activities'));
    }
}
