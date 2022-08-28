<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Home');
        SEOTools::setDescription('3lmni school is located in Rashid city, Al-Buhaira. We aim at your excellence through FUN! - مدرسة علمني تقع في مدينة راشد ، البحيرة. نحن نهدف إلى التميز الخاص بك من خلال');
        SEOTools::opengraph()->setUrl(route('home'));
        SEOTools::setCanonical(route('home'));
        SEOTools::jsonLd()->addImage(asset('web/img/general/logo-full.png'));
        $categories = Category::with('courses')->limit('4')->get();
        $levels = Level::limit('4')->get();
        $instructors = User::status('active')->type('instructor')->limit(4)->get();
        return view('web.home',compact('categories','levels','instructors'));
    }

    public function about()
    {
        SEOTools::setTitle('About');
        return view('web.about');
    }

    public function terms()
    {
        SEOTools::setTitle('Terms');
        return view('web.terms');
    }

    public function help_center()
    {
        SEOTools::setTitle('Help Center');
        return view('web.help-center');
    }

    public function contact()
    {
        SEOTools::setTitle(__('home.Contact'));
        return view('web.contact');
    }

    public function categories()
    {
        $categories = Category::paginate(25);
        SEOTools::setTitle('All categories');
        SEOTools::setDescription('All courses known on the 3lmniAcademy website');
        SEOTools::opengraph()->setUrl(route('categories'));
        SEOTools::setCanonical(route('categories'));

        return view('web.categories',compact('categories'));
    }


    public function category(Category $category)
    {
        SEOTools::setTitle($category->name);
        SEOTools::opengraph()->setUrl(route('category',$category->slug));
        SEOTools::setCanonical(route('category',$category->slug));

        return view('web.category',compact('category'));
    }

    public function instructors()
    {
        $instructors = User::status('active')->type('instructor')->paginate(50);
        SEOTools::setTitle('Instructors');
        SEOTools::setDescription('faculty of school on the 3lmniAcademy website | أعضاء هيئة التدريس في موقع أكاديمية علمني');
        SEOTools::opengraph()->setUrl(route('instructors'));
        SEOTools::setCanonical(route('instructors'));
        return view('web.instructors',compact('instructors'));
    }

}
