<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Spatie\Activitylog\Models\Activity;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $Dashboard_title = ' - Dashboard';
        View::share('title', $Dashboard_title);
        View::share('activities', Activity::orderBy('created_at','DESC')->limit(30)->get());
    }
}
