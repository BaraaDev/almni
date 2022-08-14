<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
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
        return view('web.home');
    }



}
