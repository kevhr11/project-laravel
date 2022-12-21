<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Users::all();

        return $user;
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
          'name'=>'required|max:50|string',
          'lastName'=>'required|max:50|string',
          'DUI'=>'required|max:50|string',
          'phoneNumber'=>'required|max:50',
          'email'=>'required|max:50|string',
          'password'=>'required|max:50|string',
          'imgProfile'=>'required|max:50|string',
          'gender'=>'required|max:50|string',
          'dateOfBirth'=>'required|max:50|string',
          'idToken'=>'required|max:50',
          'idSelectProfile'=>'required|max:50'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        
        //Create new User
        $user = new Users();
        $user->name = $request->name;
        $user->lastName = $request->lastName;
        $user->DUI = $request->DUI;
        $user->phoneNumber = $request->phoneNumber;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->imgProfile = $request->imgProfile;
        $user->gender = $request->gender;
        $user->dateOfBirth = $request->dateOfBirth;
        $user->idToken = $request->idToken;
        $user->idSelectProfile = $request->idSelectProfile;

        $user->save();
        return response()->json($user, Response::HTTP_ACCEPTED);
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
          'name'=>'required|max:50|string',
          'lastName'=>'required|max:50|string',
          'DUI'=>'required|max:50|string',
          'phoneNumber'=>'required|max:50',
          'email'=>'required|max:50|string',
          'password'=>'required|max:50|string',
          'imgProfile'=>'required|max:50|string',
          'gender'=>'required|max:50|string',
          'dateOfBirth'=>'required|max:50|string',
          'idToken'=>'required|max:50',
          'idSelectProfile'=>'required|max:50'
        ],
        [
          'required'=>'El campo :attribute es requerido',
          'max'=>'El nombre es :attribute largo',
          'string'=>'El campo :attribute no es una cadena de texto'
        ]);

        if ($validator->fails()) {
          return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        
        //Update new User
        $user = Users::findOrFail($request->id);
        $user->name = $request->name;
        $user->lastName = $request->lastName;
        $user->DUI = $request->DUI;
        $user->phoneNumber = $request->phoneNumber;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->imgProfile = $request->imgProfile;
        $user->gender = $request->gender;
        $user->dateOfBirth = $request->dateOfBirth;
        $user->idToken = $request->idToken;
        $user->idSelectProfile = $request->idSelectProfile;

        $user->save();

        return response()->json($user, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete User
        $user = Users::destroy($id);
        return $user;
    }
}