<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = message::all();
        return $messages;
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
        $message = new message();
        $message->idBussinesProfile = $request->idBussinesProfile;
        $message->idTouristProfile = $request->idTouristProfile;
        $message->name = $request->name;
        $message->input = $request->input;
        $message->output = $request->output;

        $message->save();
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
        $message = new message();
        $message->idBussinesProfile = $request->idBussinesProfile;
        $message->idTouristProfile = $request->idTouristProfile;
        $message->name = $request->name;
        $message->input = $request->input;
        $message->output = $request->output;

        $message->save();
        return $message;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = message::destroy($id);
        return $message;
    }
}
