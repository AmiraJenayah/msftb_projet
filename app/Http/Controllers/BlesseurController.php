<?php

namespace App\Http\Controllers;

use App\Blesseur;
use Illuminate\Http\Request;

class BlesseurController extends Controller
{
    public function __construct()
    {
       // $this->user = JWTAuth::parseToken()->authenticate();
        $model_blesseur =  new Blesseur();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Blesseur::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model_blesseur = new Blesseur();
        $blesseur=$model_blesseur->stor_blesseur($request);
        return $blesseur;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blesseur  $blesseur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_blesseur = new Blesseur();
        $blesseur=$model_blesseur->show_blesseur($$id);
        return $blesseur;

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blesseur  $blesseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model_blesseur = new Blesseur();
        $blesseur=$model_blesseur->show_blesseur($$id);
        return $blesseur;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blesseur  $blesseur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model_blesseur = new Blesseur();
        $blesseur = $model_blesseur->destroy_blesseur($id);
        return $blesseur;

    }
}
