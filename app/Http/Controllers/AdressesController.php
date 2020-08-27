<?php

namespace App\Http\Controllers;

use App\Adresses;
use Illuminate\Http\Request;

class AdressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Adresses::all()->where('deleted', false);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model_adresse = new Adresses();
        $adress = $model_adresse->store_adress($request);
        return $adress;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adresses  $adresses
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_adresse = new Adresses();
        $adress = $model_adresse->show_adress($id);
        return $adress;

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adresses  $adresses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model_adresse = new Adresses();
        $adress = $model_adresse->update_adress($request,$id);
        return $adress;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adresses  $adresses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model_adresse = new Adresses();
        $adress = $model_adresse->destroy_adress($id);
        return $adress;
    }
}
