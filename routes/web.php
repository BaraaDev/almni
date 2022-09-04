<?php

use App\Http\Controllers\Web\Instructor\OptionController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\Instructor\QuestionController;
use App\Http\Controllers\Web\CourseController;
use App\Http\Controllers\Web\Instructor\FormatController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\Student\ExerciseController;
use App\Http\Controllers\Web\Student\FinalExamController;
use App\Http\Controllers\Web\Student\QuizController;
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
    Route::group(['prefix' => 'profile'], function (){
        Route::get('/', [ProfileController::class, 'profile'])->name('web.profile');
        Route::get('/final-exam/{id}', [FinalExamController::class, 'show'])->name('final-exam.show');
        Route::post('/final-exam/{id}', [FinalExamController::class, 'store'])->name('final-exam.store');

        Route::get('/exercises/{id}', [ExerciseController::class, 'show'])->name('exercises.show');
        Route::post('/exercises/{id}', [ExerciseController::class, 'store'])->name('exercises.store');

        Route::get('/quizzes/{id}', [QuizController::class, 'show'])->name('quizzes.show');
        Route::post('/quizzes/{id}', [QuizController::class, 'store'])->name('quizzes.store');


        Route::get('/result/{id}', [FinalExamController::class, 'result'])->name('result');
        Route::group(['middleware' => 'student'], function (){
            Route::get('/courses', [ProfileController::class, 'courses'])->name('web.profile.courses');
            Route::get('/settings', [ProfileController::class, 'settings'])->name('web.profile.settings');
            Route::patch('/updateSetting', [ProfileController::class, 'updateSetting'])->name('web.profile.updateSetting');
            Route::post('/updatePassword', [ProfileController::class, 'profileUpdatePassword'])->name('web.profile.profileUpdatePassword');

            Route::resource('/formats', FormatController::class);
            Route::resource('/questions', QuestionController::class);
            Route::resource('/options', OptionController::class);
        });

    });
});
