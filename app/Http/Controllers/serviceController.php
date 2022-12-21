<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return $services;
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
          'idCategory'=>'required',
          'name'=>'required|max:50|string',
          'description'=>'required|max:50|string',
          'price'=>'required',
          'img'=>'required|max:50|string',
          'idBussinesProfile'=>'required'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        //Create new Service
        $service = new Service();
        $service->idCategory = $request->idCategory;
        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->img = $request->img;
        $service->idBussinesProfile = $request->idBussinesProfile;

        $service->save();
        return response()->json($service, Response::HTTP_ACCEPTED);
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
          'idCategory'=>'required',
          'name'=>'required|max:50|string',
          'description'=>'required|max:50|string',
          'price'=>'required',
          'img'=>'required|max:50|string',
          'idBussinesProfile'=>'required'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        //Update new Service
        $service = Service::findOrFail($request->id);
        $service->idCategory = $request->idCategory;
        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->img = $request->img;
        $service->idBussinesProfile = $request->idBussinesProfile;

        $service->save();
        return response()->json($service, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete Service
        $service = Service::destroy($id);
        return $service;
    }
}
