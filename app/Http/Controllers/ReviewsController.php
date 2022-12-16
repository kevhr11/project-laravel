<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reviews = Reviews::all();
        return $reviews;
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
        $reviews = new Reviews();
        $reviews->idBussinesProfile = $request->idBussinesProfile;
        $reviews->idTouristProfile = $request->idTouristProfile;        
        $reviews->description = $request->description;        
        $reviews->score = $request->score;  

        $reviews->save();
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
        $reviews = Reviews::find($id);
        return $reviews;
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
        $reviews = Reviews::findOrFail($request->id);
        $reviews = new Reviews();
        $reviews->idBussinesProfile = $request->idBussinesProfile;
        $reviews->idTouristProfile = $request->idTouristProfile;        
        $reviews->description = $request->description;        
        $reviews->score = $request->score;  

        $reviews->save();
        return $reviews;
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
        $reviews = Reviews::destroy($id);
        return $reviews;
    }
}