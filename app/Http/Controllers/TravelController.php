<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel as Travel;

class TravelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('adminList');
    }

    public function index()
    {
        return view('site/tours', ['travels' => Travel::All()]);
    }

    public function show($id)
    {
        return view('site/travel', ['travel' => Travel::findOrFail($id)]);
    }

    public function showAll()
    {
        return view('site/tours', ['travels' => Travel::All()]);
    }


    public function adminList()
    {
        return view('admin/adminList', ['travels' => Travel::All()]);
    } 

    public function search(Request $request)
    {
        if($request->max == null) {
            $request->max = 10000000;
        }
        if($request->min == null) {
            $request->min = 0;
        }
        if($request->country == null) {
            $request->country = '%';
        }
        $travels = Travel::where('localisation', 'like', $request->country)
        ->where('cost', '<', $request->max)
        ->where('cost', '>', $request->min)
        ->get();
        return view('site/tours', ['travels' => $travels]);
    } 
}
