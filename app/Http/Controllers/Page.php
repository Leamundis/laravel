<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page extends Controller
{
    public function about()
    {
        return view('site/about');
    }

    public function blog()
    {
        return view('site/blog');
    }

    public function contact()
    {
        return view('site/contact');
    }

    public function hotels()
    {
        return view('site/hotels');
    }

    public function tours()
    {
        return view('site/tours');
    }

    public function services()
    {
        return view('site/services');
    }

    public function home()
    {
        return view('home');
    }

}
