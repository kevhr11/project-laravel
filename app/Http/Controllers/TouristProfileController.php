<?php

namespace App\Http\Controllers;

use App\Models\TouristProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        //Validate data
        $validator = Validator::make($request->all(), [
          'idUser'=>'required',
          'description'=>'required|max:50|string',
          'location'=>'required|max:50|string',
          'message'=>'required|max:50|string',
          'reviews'=>'required|max:50|string',
          'idTouristPlaces'=>'required'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors());
        }
        
        //Create new TouristProfile
        $touristprofile = new TouristProfile();
        $touristprofile->idUser = $request->idUser;
        $touristprofile->description = $request->description;
        $touristprofile->location = $request->location;
        $touristprofile->message = $request->message;
        $touristprofile->reviews = $request->reviews;
        $touristprofile->idTouristPlaces = $request->idTouristPlaces;

        $touristprofile->save();
        return response()->json($touristprofile, status:201);
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
        //Validate data
        $validator = Validator::make($request->all(), [
          'idUser'=>'required',
          'description'=>'required|max:50|string',
          'location'=>'required|max:50|string',
          'message'=>'required|max:50|string',
          'reviews'=>'required|max:50|string',
          'idTouristPlaces'=>'required'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors());
        }
        
        //Update new TouristProfile
        $touristprofile = TouristProfile::findOrFail($id);
        $touristprofile->idUser = $request->idUser;
        $touristprofile->description = $request->description;
        $touristprofile->location = $request->location;
        $touristprofile->message = $request->message;
        $touristprofile->reviews = $request->reviews;
        $touristprofile->idTouristPlaces = $request->idTouristPlaces;

        $touristprofile->save();

        return response()->json($touristprofile, status:405);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete TouristProfile
        $touristprofile = TouristProfile::destroy($id);
        return $touristprofile;
    }
}