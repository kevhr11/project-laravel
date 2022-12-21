<?php

namespace App\Http\Controllers;

use App\Models\touristPlaceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class tourisPlaceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourisPlaceType = touristPlaceType::all();

        return $tourisPlaceType;
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
          'name'=>'required|max:10|string',
          'status'=>'required|max:10|string'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors());
        }
        
        //Create new TourisPlaceType
        $tourisPlaceType = new touristPlaceType();
        $tourisPlaceType->name = $request->name;
        $tourisPlaceType->status = $request->status;

        $tourisPlaceType->save();
        return response()->json($tourisPlaceType, status:201);
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
          'name'=>'required|max:10|string',
          'status'=>'required|max:10|string'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors());
        }
        
        //Update new TourisPlaceType
        $tourisPlaceType  = touristPlaceType::findOrFail($request->id);
        $tourisPlaceType = new touristPlaceType();
        $tourisPlaceType->name = $request->name;
        $tourisPlaceType->status = $request->status;

        $tourisPlaceType->save();

        return response()->json($tourisPlaceType, status:405);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete TouristType
        $tourisPlaceType = touristPlaceType::destroy($id);
        return $tourisPlaceType;
    }
}