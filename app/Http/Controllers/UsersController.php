<?php

namespace App\Http\Controllers;


use App\Models\Users;
use Illuminate\Http\Request;

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
        //
        $user = new Users();

        $user->name = $request->name;
        $user->lastName = $request->lastName;
        $user->DUI = $request->DUI;
        $user->phoneNumber = $request->phoneNumber;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->idRoll = $request->idRoll;
        $user->imgProfile = $request->imgProfile;
        $user->idGender = $request->idGender;
        $user->dateOfBirth = $request->dateOfBirth;
        $user->idToken = $request->idToken;
        $user->idSelectProfile = $request->idSelectProfile;

        $user->save();

        return $user;
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
        //
        $user = Users::findOrFail($request->id);

        $user->name = $request->name;
        $user->lastName = $request->lastName;
        $user->DUI = $request->DUI;
        $user->phoneNumber = $request->phoneNumber;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->idRoll = $request->idRoll;
        $user->imgProfile = $request->imgProfile;
        $user->idGender = $request->idGender;
        $user->dateOfBirth = $request->dateOfBirth;
        $user->idToken = $request->idToken;
        $user->idSelectProfile = $request->idSelectProfile;

        $user->save();

        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}