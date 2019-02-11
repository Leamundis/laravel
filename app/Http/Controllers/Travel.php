<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Travel extends Controller
{
    public function index()
    {
        return view('site/travelList');
    }

    public function show($id)
    {

    }
}
