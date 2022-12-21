<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BussinesType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BussinesTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bussinesType = BussinesType::all();
        return $bussinesType;
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
          'max'=>'El campo :attribute es muy largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);
        
        if ($validator->fails()) {
          return response()->json($validator->errors());
        }
        
        //Create new BussineType
        $bussinesType = new BussinesType();
        $bussinesType->name = $request->name;

        $bussinesType->save();
        return response()->json($bussinesType, status:201);
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
        $bussinesType = BussinesType::find($id);
        return $bussinesType;
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
          return response()->json($validator->errors());
        }
        
        //Update new BussineType
        $bussinesType = BussinesType::findOrFail($request->id);
        $bussinesType->name = $request->name;

        $bussinesType->save();
        return response()->json($bussinesType, status:201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete BussineType
        $bussinesType = BussinesType::destroy($id);
        return $bussinesType;
    }
}