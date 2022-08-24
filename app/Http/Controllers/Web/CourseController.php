<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Artesaos\SEOTools\Facades\SEOTools;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::status('active')->paginate(25);
        SEOTools::setTitle('All Course');
        SEOTools::setDescription('All courses known on the 3lmniAcademy website');
        SEOTools::opengraph()->setUrl(route('courses'));
        SEOTools::setCanonical(route('courses'));
        SEOTools::jsonLd()->addImage(asset('web/img/general/logo-full.png'));

        return view('web.courses',compact('courses'));
    }

    public function course(Course $course)
    {
        $courses = Course::status('active')->orderBy('created_at','DESC')->limit(7)->get();
        SEOTools::setTitle($course->title);
        SEOTools::setDescription($course->description);
        SEOTools::opengraph()->setUrl(route('course',$course->id));
        SEOTools::setCanonical(route('course',$course->id));
        SEOTools::jsonLd()->addImage($course->photo);

        return view('web.course',compact('course','courses'));
    }
}
