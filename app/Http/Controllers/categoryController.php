<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return $category;
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
          'name'=>'required|max:10|string'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);
        
        if ($validator->fails()) {
          return response()->json($validator->errors());
        }
        
        //Create new Category      
        $category = new Category();
        $category->name = $request->name;

        $category->save();
        return response()->json($category, status:201);
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
          'name'=>'required|max:10|string'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);
        
        if ($validator->fails()) {
          return response()->json($validator->errors());
        }
        
        //Update new Category
        $category = Category::findOrFail($request->id);
        $category->name = $request->name;

        $category->save();
        return response()->json($category, status:201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete Category
        $category = Category::destroy($id);
        return $category;
    }
}