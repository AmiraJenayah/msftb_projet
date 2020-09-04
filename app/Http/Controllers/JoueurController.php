<?php

namespace App\Http\Controllers;

use App\Joueur;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;


class JoueurController extends Controller
{


     /**
     * @var
     */
    protected $user;

    /**
     * TaskController constructor.
     */
  /*   public function __construct()
    {
       // $this->user = JWTAuth::parseToken()->authenticate();
        $model_joueur =  new Joueur();
    }
 */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Joueur::all()->where ('deleted' , false);

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model_joueur = new Joueur();
        $joueur =$model_joueur->store_joueur($request);
        return $joueur;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_joueur =  new Joueur();

        $joueur =$model_joueur->show_joueur($id);
        return $joueur;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $model_joueur = new Joueur();

        $joueur =$model_joueur->update_joueur($request,$id);
        return $joueur;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model_joueur = new Joueur();

        $joueur =$model_joueur->destroy_joueur($id);
        return $joueur;
    }
}
