<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function options()
    {
        return view('frontend.options.index');
    }

    public function projects()
    {
        return view('frontend.projects.index');
    }

    public function gallery()
    {
        return view('frontend.gallery.index');
    }

    public function blog()
    {
        return view('frontend.blog.index');
    }
    public function contactus()
    {
        return view('frontend.contactus.index');
    }
    public function aboutus()
    {
        return view('frontend.aboutus');
    }
    public function privacypolicy()
    {
        return view('frontend.privacypolicy');
    }
    public function termsandconditions()
    {
        return view('frontend.termsandconditions');
    }
    public function landareaconverter()
    {
        return view('frontend.options.landareaconverter');
    }
    public function homecostcalculator()
    {
        return view('frontend.options.homecostcalculator');
    }
      public function showpage()
    {
        return view('frontend.blog.showpage');
    }
}
