<?php

namespace App\Http\Controllers;

use App\Models\Departament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class DepartamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create controller departaments
        $departament = Departament::all();

        return $departament ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


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
          'name'=>'required|max:50|string'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors(), Response::HTTP_EXPECTATION_FAILED);
        }
        
        //Create new departament
        $departament = new Departament();
        $departament->name = $request->name;

        $departament->save();
        return response()->json($departament, Response::HTTP_OK);
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
          'name'=>'required|max:50|string'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors(), Response::HTTP_EXPECTATION_FAILED);
        }
        
        //Update new departament
        $departament = Departament::findOrFail($id);
        $departament->name = $request->name;

        $departament->save();
        return response()->json($departament, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete Departament
        $departament = Departament::destroy($id);
        return $departament;
    }
}