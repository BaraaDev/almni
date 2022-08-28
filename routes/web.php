<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\CourseController;
use App\Http\Controllers\Web\HomeController;
use Artesaos\SEOTools\Facades\SEOTools;
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

Route::get('signin', function () {
    SEOTools::setTitle('Sign In');
    SEOTools::setDescription('تسجيل الدخول لأكاديمية علمني ');
    SEOTools::opengraph()->setUrl(route('signin'));
    SEOTools::setCanonical(route('signin'));
    if (!auth()->user()) {
        return view('web.signIn');
    } else {
        return redirect(\route('home'));
    }
})->name('signin');

Route::get('signup', function () {
    SEOTools::setTitle('Sign Up');
    SEOTools::setDescription('اشترك الان فى موقع اكاديمية علمني');
    SEOTools::opengraph()->setUrl(route('signup'));
    if (!auth()->user()) {
        return view('web.signup');
    } else {
        return redirect(\route('home'));
    }
})->name('signup');

Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/{course:slug}', [CourseController::class, 'course'])->name('course');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/categories/{category:slug}', [HomeController::class, 'category'])->name('category');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/help-center', [HomeController::class, 'help_center'])->name('help_center');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/instructors', [HomeController::class, 'instructors'])->name('instructors');
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth']], function () {
    Route::get('/profile', [ProfileController::class, 'profile'])->name('web.profile');
    Route::get('/profile/courses', [ProfileController::class, 'courses'])->name('web.profile.courses');
    Route::get('/profile/settings', [ProfileController::class, 'settings'])->name('web.profile.settings');
    Route::patch('/profile/updateSetting', [ProfileController::class, 'updateSetting'])->name('web.profile.updateSetting');
    Route::post('/profile/updatePassword', [ProfileController::class, 'profileUpdatePassword'])->name('web.profile.profileUpdatePassword');
});
