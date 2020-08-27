<?php

namespace App\Http\Controllers;

use App\Exercice;
use Illuminate\Http\Request;

class ExerciceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Exercice::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model_exercice = new Exercice();
        $exercice = $model_exercice->store_exercice($request);
        return $exercice;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exercice  $exercice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_exercice = new Exercice();
        $exercice = $model_exercice->show_exercice($id);
        return $exercice;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exercice  $exercice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model_exercice = new Exercice();
        $exercice = $model_exercice->update_exercice($request,$id);
        return $exercice;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exercice  $exercice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model_exercice = new Exercice();
        $exercice = $model_exercice->destroy_exercice($id);
        return $exercice;
    }
}
