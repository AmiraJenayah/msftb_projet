<?php

namespace App\Http\Controllers;
use App\Entrainement;
use Illuminate\Http\Request;

class EntrainementController extends Controller
{
  public function index()
    {
        return Entrainement::all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model_entrainement= new Entrainement();
        $entrainement= $model_entrainement->store_entrainement($request);
        return $entrainement;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entrainement  $entrainement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_entrainement= new Entrainement();
        $entrainement= $model_entrainement->show_entrainement($id);
        return $entrainement;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entrainement  $entrainement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model_entrainement= new Entrainement();
        $entrainement= $model_entrainement->update_entrainement($request,$id);
        return $entrainement;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entrainement  $entrainement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model_entrainement= new Entrainement();
        $entrainement= $model_entrainement->destroy_entrainement($id);
        return $entrainement;
    }
}
