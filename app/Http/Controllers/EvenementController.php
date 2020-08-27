<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Evenement::all();
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model_envenement = new Evenement();
        $evenement = $model_envenement->store_evenement($request);
        return $evenement;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_envenement = new Evenement();
        $evenement = $model_envenement->show_evenement($id);
        return $evenement;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model_envenement = new Evenement();
        $evenement = $model_envenement->update_evenement($request,$id);
        return $evenement;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model_envenement = new Evenement();
        $evenement = $model_envenement->destroy_evenement($id);
        return $evenement;
    }
}
