<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        //Validate data
        $validator = Validator::make($request->all(), [
          'idBussinesProfile'=>'required',
          'idTouristProfile'=>'required',
          'description'=>'required|max:50|string',
          'score'=>'required|max:50|string'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors());
        }
        
        //Create new Review
        $reviews = new Reviews();
        $reviews->idBussinesProfile = $request->idBussinesProfile;
        $reviews->idTouristProfile = $request->idTouristProfile;        
        $reviews->description = $request->description;        
        $reviews->score = $request->score;  

        $reviews->save();
        return response()->json($reviews, status:201);
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
        //Validate data
        $validator = Validator::make($request->all(), [
          'idBussinesProfile'=>'required',
          'idTouristProfile'=>'required',
          'description'=>'required|max:50|string',
          'score'=>'required|max:50|string'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);
        
        if ($validator->fails()) {
          return response()->json($validator->errors());
        }
        
        //Update new Review
        $reviews = Reviews::findOrFail($request->id);
        $reviews = new Reviews();
        $reviews->idBussinesProfile = $request->idBussinesProfile;
        $reviews->idTouristProfile = $request->idTouristProfile;        
        $reviews->description = $request->description;        
        $reviews->score = $request->score;  

        $reviews->save();
        return response()->json($reviews, status:405);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete Reviews
        $reviews = Reviews::destroy($id);
        return $reviews;
    }
}