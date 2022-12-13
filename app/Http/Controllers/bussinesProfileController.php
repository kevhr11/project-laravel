<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BussinesProfile;

class bussinesProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bussinesPrfiles = BussinesProfile::all();
        return $bussinesPrfiles;
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
        $bussineProfile = new BussinesProfile();
        $bussineProfile->idUser = $request->idUser;
        $bussineProfile->description = $request->description;
        $bussineProfile->location = $request->location;
        $bussineProfile->idGetServices = $request->idGetServices;
        $bussineProfile->idBussinesType = $request->idBussinesType;
        $bussineProfile->certificate = $request->certificate;
        $bussineProfile->message = $request->message;
        $bussineProfile->reviews = $request->reviews;
        $bussineProfile->idTourisPlace = $request->idTourisPlace;
        $bussineProfile->score = $request->score;

        $bussineProfile->save();
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
        $bussineProfile = BussinesProfile::findOrFail($request->id);
        $bussineProfile->idUser = $request->idUser;
        $bussineProfile->description = $request->description;
        $bussineProfile->location = $request->location;
        $bussineProfile->idGetServices = $request->idGetServices;
        $bussineProfile->idBussinesType = $request->idBussinesType;
        $bussineProfile->certificate = $request->certificate;
        $bussineProfile->message = $request->message;
        $bussineProfile->reviews = $request->reviews;
        $bussineProfile->idTourisPlace = $request->idTourisPlace;
        $bussineProfile->score = $request->score;

        $bussineProfile->save();
        return $bussineProfile;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bussineProfile = BussinesProfile::destroy($id);
        return $bussineProfile;
    }
}