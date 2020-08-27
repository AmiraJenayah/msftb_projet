<?php

namespace App\Http\Controllers;

use App\famille;
use App\Famille as AppFamille;
use Illuminate\Http\Request;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AppFamille::all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model_famille = new Famille();
        $famille =$model_famille->store_famille($request);
        return $famille;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_famille = new Famille();
        $famille =$model_famille->store_famille($id);
        return $famille;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model_famille = new Famille();
        $famille =$model_famille->store_famille($request,$id);
        return $famille;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model_famille = new Famille();
        $famille =$model_famille->store_famille($id);
        return $famille;
    }
}
