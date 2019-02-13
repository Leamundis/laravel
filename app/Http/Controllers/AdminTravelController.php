<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use Validator;

class AdminTravelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.adminList', ['travels' => Travel::All()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/addTravel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'label' => 'required',
            'localisation' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'disponibility' => 'required|boolean',
            'cost' => 'required|numeric',
            'description' => 'required'
        ]);

        if($validator->fails()) {
            return redirect('admin/travels/create')
                ->withErrors($validator)
                ->withInput();
        }

        $travel = new Travel;
        $travel->label = $request->label;
        $travel->localisation = $request->localisation;
        $travel->start_date = $request->start_date;
        $travel->end_date = $request->end_date;
        $travel->picture = 'http://lorempixel.com/640/480/';
        $travel->disponibility = ($request->dispo === 'true') ? 1 : 0;
        $travel->cost = $request->cost;
        $travel->description = $request->description;
        $travel->save();

        return redirect()->Route('admin.travels.index')->with('status', "Le voyage " . $request->label . " a bien été créé! GG");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.updateTravel', ['travel' => Travel::getoneTravel($id)]);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $travel = Travel::find($id);
        $travel->label = $request->label;
        $travel->localisation = $request->localisation;
        $travel->start_date = $request->start_date;
        $travel->end_date = $request->end_date;
        $travel->picture = 'http://lorempixel.com/640/480/';
        $travel->disponibility = ($request->dispo === 'true') ? 1 : 0;
        $travel->cost = $request->cost;
        $travel->description = $request->description;
        $travel->save();
        return redirect()->Route('admin.travels.index')->with('status', "Le voyage " . $travel->label . " a bien été mis à jour! GG");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $travel = Travel::find($id);
        $label = $travel->label;
        Travel::destroy($id);
        return redirect()->Route('admin.travels.index')->with('status', "Le voyage " . $label . " a bien été supprimé! GG");
    }
}
