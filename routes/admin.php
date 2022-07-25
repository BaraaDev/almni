<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\LectureController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\RoleController;
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
        Route::resource('/users', UserController::class);
        Route::resource('/students', StudentController::class);

        Route::get('/participants/waiting', [StudentController::class,'waiting'])->name('participants.waiting');
        Route::resource('/cities', CityController::class);
        Route::resource('/levels', LevelController::class);
        Route::resource('/subjects', SubjectController::class);
        Route::resource('/groups', GroupController::class);
        Route::resource('/categories', CategoryController::class);
        Route::resource('/courses', CourseController::class);
        Route::resource('/lectures', LectureController::class);
        Route::resource('/instructors', InstructorController::class);
        Route::resource('/roles',RoleController::class);
    });
});
