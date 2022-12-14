<?php

namespace App\Http\Controllers;

use App\Models\TouristAtt;
use Illuminate\Http\Request;

class TouristAttController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $touristiatt = TouristAtt::all();

        return $touristiatt;
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

        $TouristAtt = new TouristAtt();
        $TouristAtt->name = $request->name;
        $TouristAtt->idStatu = $request->idStatu;

        $TouristAtt->save();

        return $TouristAtt;
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
        $touristAtt  = TouristAtt::findOrFail($id);

        $touristAtt->name = $request->name;
        $touristAtt->idStatu = $request->idStatu;

        $touristAtt->save();

        return $touristAtt;

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
