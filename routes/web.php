<?php

use App\Http\Controllers\Web\CourseController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/{course:slug}', [CourseController::class, 'course'])->name('course');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/categories/{category:slug}', [HomeController::class, 'category'])->name('category');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/help-center', [HomeController::class, 'help_center'])->name('help_center');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth']], function () {
    Route::get('/profile', [HomeController::class, 'profile'])->name('web.profile');
});
