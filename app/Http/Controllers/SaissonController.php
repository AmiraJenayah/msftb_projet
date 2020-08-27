<?php

namespace App\Http\Controllers;

use App\Saisson;
use Illuminate\Http\Request;

class SaissonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Saisson::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model_saisson = new Saisson();
        $saisson = $model_saisson->store_saisson($request);
        return $saisson;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Saisson  $saisson
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_saisson = new Saisson();
        $saisson = $model_saisson->show_saisson($id);
        return $saisson;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Saisson  $saisson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id )
    {
        $model_saisson = new Saisson();
        $saisson = $model_saisson->update_saisson($request,$id);
        return $saisson;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Saisson  $saisson
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model_saisson = new Saisson();
        $saisson = $model_saisson->destroy_saisson($id);
        return $saisson;
    }
}
