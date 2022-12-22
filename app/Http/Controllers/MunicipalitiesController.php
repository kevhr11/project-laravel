<?php

namespace App\Http\Controllers;

use App\Models\Municipalitie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class MunicipalitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $municipalities = Municipalitie::all();

        return $municipalities;

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
          'idDepartaments'=>'required'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors(), Response::HTTP_EXPECTATION_FAILED);
        }

        //Create new Municipality
        $municipalities = new Municipalitie();
        $municipalities->name = $request->name;
        $municipalities->idDepartaments = $request->idDepartaments;

        $municipalities->save();
        return response()->json($municipalities, Response::HTTP_OK);
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
          'idDepartaments'=>'required'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors(), Response::HTTP_EXPECTATION_FAILED);
        }

        //Update new Municipality
        $municipalities = Municipalitie::findOrFail($request->id);
        $municipalities->name = $request->name;
        $municipalities->idDepartaments = $request->idDepartaments;

        $municipalities->save();
        return response()->json($municipalities, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete Municipality
        $municipalities = Municipalitie::destroy($id);
        return $municipalities;
    }
}