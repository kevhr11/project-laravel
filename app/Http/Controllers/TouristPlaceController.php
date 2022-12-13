<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TouristPlace;

class TouristPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get TouristPlace

        $TouristPlace = TouristPlace::all();

        return $TouristPlace;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $TouristPlace = new TouristPlace();
        $TouristPlace->name = $request->mame;
        $TouristPlace->location = $request->location;
        $TouristPlace->idMunicipalities = $request->idMunicipalities;
        $TouristPlace->description = $request->description;
        $TouristPlace->gallery = $request->gallery;
        $TouristPlace->score = $request->score;
        $TouristPlace->idTouristAttractive = $request->idTouristAttractive;

        $TouristPlace->save();
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
        //
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
        //
        $TouristPlace = TouristPlace::findOrFail($id);
        $TouristPlace->name = $request->mame;
        $TouristPlace->location = $request->location;
        $TouristPlace->idMunicipalities = $request->idMunicipalities;
        $TouristPlace->description = $request->description;
        $TouristPlace->gallery = $request->gallery;
        $TouristPlace->score = $request->score;
        $TouristPlace->idTouristAttractive = $request->idTouristAttractive;

        $TouristPlace->save();

        return $TouristPlace;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
