<?php

use App\Http\Controllers\Admin\BuncheController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ClassroomController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\LectureController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\LifeStageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SalaryController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth']], function () {
    Route::group(['prefix' => 'dashboard'], function (){
        Route::get('/', [HomeController::class, 'index'])->name('dashboard');


        Route::get('/activities', [HomeController::class, 'activity_log'])->name('activity_log');


        Route::resource('/users', UserController::class);
        Route::resource('/students', StudentController::class);

        Route::get('/participants/waiting', [StudentController::class,'waiting'])->name('participants.waiting');
        Route::resource('/cities', CityController::class);
        Route::resource('/levels', LevelController::class);
        Route::resource('/life-stages', LifeStageController::class);
        Route::resource('/subjects', SubjectController::class);
        Route::resource('/groups', GroupController::class);
        Route::get('/group/{id}/students',[GroupController::class,'student'])->name('group.instructors');
        Route::post('/students/arrival',[GroupController::class,'Arrival'])->name('instructors.arrival');
        Route::post('/students/missed',[GroupController::class,'missed'])->name('instructors.missed');
        Route::resource('/categories', CategoryController::class);
        Route::resource('/courses', CourseController::class);
        Route::resource('/lectures', LectureController::class);
        Route::resource('/instructors', InstructorController::class);
        Route::resource('/roles',RoleController::class);
        Route::resource('/expenses',ExpenseController::class);
        Route::resource('/salaries',SalaryController::class);
        Route::resource('/bunches',BuncheController::class);
        Route::resource('/classrooms',ClassroomController::class);
        Route::get('/reports/bunches',[BuncheController::class,'bunches'])->name('reports.bunches');
        Route::get('/reports/salaries',[SalaryController::class,'salaries'])->name('reports.salaries');
        Route::get('/reports/salaries/{id}',[SalaryController::class,'salary'])->name('reports.salary');
        Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
        Route::post('/profile',[ProfileController::class,'edit_my_Profile'])->name('editProfile');
    });
});
