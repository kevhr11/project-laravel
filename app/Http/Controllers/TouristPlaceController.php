<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TouristPlace;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

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
        //Validate data
        $validator = Validator::make($request->all(), [
          'namePlace'=>'required|max:50|string',
          'location'=>'required|max:50|string',
          'idMunicipalities'=>'required',
          'description'=>'required|max:50|string',
          'gallery'=>'required|max:50|string',
          'score'=>'required',
          'idTouristPlaceType'=>'required'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        
        //Create new TouristPlace
        $TouristPlace = new TouristPlace();
        $TouristPlace->namePlace = $request->namePlace;
        $TouristPlace->location = $request->location;
        $TouristPlace->idMunicipalities = $request->idMunicipalities;
        $TouristPlace->description = $request->description;
        $TouristPlace->gallery = $request->gallery;
        $TouristPlace->score = $request->score;
        $TouristPlace->idTouristPlaceType = $request->idTouristPlaceType;

        $TouristPlace->save();
        return response()->json($TouristPlace, Response::HTTP_ACCEPTED);
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
          'namePlace'=>'required|max:50|string',
          'location'=>'required|max:50|string',
          'idMunicipalities'=>'required',
          'description'=>'required|max:50|string',
          'gallery'=>'required|max:50|string',
          'score'=>'required',
          'idTouristPlaceType'=>'required'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        
        //Update new TouristPlace
        $TouristPlace = TouristPlace::findOrFail($id);
        $TouristPlace->namePlace = $request->namePlace;
        $TouristPlace->location = $request->location;
        $TouristPlace->idMunicipalities = $request->idMunicipalities;
        $TouristPlace->description = $request->description;
        $TouristPlace->gallery = $request->gallery;
        $TouristPlace->score = $request->score;
        $TouristPlace->idTouristPlaceType = $request->idTouristPlaceType;

        $TouristPlace->save();

        return response()->json($TouristPlace, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete TouristPlace
        $TouristPlace = TouristPlace::destroy($id);
        return $TouristPlace;
    }
}