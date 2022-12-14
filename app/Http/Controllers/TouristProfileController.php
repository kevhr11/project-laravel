<?php

namespace App\Http\Controllers;

use App\Models\TouristProfile;
use Illuminate\Http\Request;

class TouristProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $touristprofile = TouristProfile::all();

        return $touristprofile;
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
        $touristprofile = new TouristProfile();

        $touristprofile->idUser = $request->idUser;
        $touristprofile->description = $request->description;
        $touristprofile->location = $request->location;
        $touristprofile->message = $request->message;
        $touristprofile->reviews = $request->reviews;
        $touristprofile->idTouristPlaces = $request->idTouristPlaces;
        $touristprofile->idGallery = $request->idGallery;

        $touristprofile->save();

        return $touristprofile;


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
        $touristprofile = TouristProfile::findOrFail($id);

        $touristprofile->idUser = $request->idUser;
        $touristprofile->description = $request->description;
        $touristprofile->location = $request->location;
        $touristprofile->message = $request->message;
        $touristprofile->reviews = $request->reviews;
        $touristprofile->idTouristPlaces = $request->idTouristPlaces;
        $touristprofile->idGallery = $request->idGallery;

        $touristprofile->save();

        return $touristprofile;

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
