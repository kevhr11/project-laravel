<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BussinesProfile;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class bussinesProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bussinesProfiles = BussinesProfile::all();
        return $bussinesProfiles;
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
          'idBussinesType'=>'required',
          'message'=>'required|max:50|string',
          'reviews'=>'required|max:50|string',
          'idTourisPlace'=>'required',
          'score'=>'required|max:50'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);
        
        if ($validator->fails()) {
          return response()->json($validator->errors(), Response::HTTP_EXPECTATION_FAILED);
        }
        
        //Create new BussineProfile
        $bussineProfile = new BussinesProfile();
        $bussineProfile->idUser = $request->idUser;
        $bussineProfile->description = $request->description;
        $bussineProfile->location = $request->location;
        $bussineProfile->idBussinesType = $request->idBussinesType;
        $bussineProfile->message = $request->message;
        $bussineProfile->reviews = $request->reviews;
        $bussineProfile->idTourisPlace = $request->idTourisPlace;
        $bussineProfile->score = $request->score;

        $bussineProfile->save();
        return response()->json($bussineProfile, Response::HTTP_OK);
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
          'idBussinesType'=>'required',
          'message'=>'required|max:50|string',
          'reviews'=>'required|max:50|string',
          'idTourisPlace'=>'required',
          'score'=>'required|max:50'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);
        
        if ($validator->fails()) {
          return response()->json($validator->errors(), Response::HTTP_EXPECTATION_FAILED);
        }
        
        //Update new BussineProfile
        $bussineProfile = BussinesProfile::findOrFail($request->id);
        $bussineProfile->idUser = $request->idUser;
        $bussineProfile->description = $request->description;
        $bussineProfile->location = $request->location;
        $bussineProfile->idBussinesType = $request->idBussinesType;
        $bussineProfile->message = $request->message;
        $bussineProfile->reviews = $request->reviews;
        $bussineProfile->idTourisPlace = $request->idTourisPlace;
        $bussineProfile->score = $request->score;

        $bussineProfile->save();
        return response()->json($bussineProfile, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete BussineProfile
        $bussineProfile = BussinesProfile::destroy($id);
        return $bussineProfile;
    }
}