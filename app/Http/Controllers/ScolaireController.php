<?php

namespace App\Http\Controllers;

use App\scolaire;
use App\Scolaire as AppScolaire;
use Illuminate\Http\Request;

class ScolaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AppScolaire::all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model_scolaire = new Scolaire();
        $scolaire = $model_scolaire->store_scolaire($request);
        return $scolaire;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\scolaire  $scolaire
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_scolaire = new Scolaire();
        $scolaire = $model_scolaire->store_scolaire($id);
        return $scolaire;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\scolaire  $scolaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model_scolaire = new Scolaire();
        $scolaire = $model_scolaire->store_scolaire($request,$id);
        return $scolaire;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\scolaire  $scolaire
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model_scolaire = new Scolaire();
        $scolaire = $model_scolaire->store_scolaire($id);
        return $scolaire;
    }
}
