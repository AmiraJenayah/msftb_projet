<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Joueur extends Model
{
    use SoftDeletes;
    public function contact()
    {
    	return $this->hasOne('App\Contact','id','contact_id');
    }

    public function adresse()
    {
    	return $this->hasMany('App\Adresses','id','adresse_id');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Post','joueur_post','joueur_id','post_id');
    }

    public function performances()
    {
        return $this->belongsToMany('App\Performance','joueur_performance','joueur_id','performance_id')->select(['joueur_id','performance_id','value','name','slug']);
    }

    public function suspenduses(){
        return $this->belongsToMany('App\Suspendus','joueur_suspenduses','joueur_id','suspension_id');
    }

    public function blesseurs(){
        return $this->belongsToMany('App\Blesseur','joueur_blesseur','joueur_id','blesseur_id');
    }

    public static function boot(){
        parent::boot();

        static::deleting(function(Joueur $joueur){
            $joueur->contact()->delete();
            $joueur->adresse()->delete();
            $joueur->posts()->delete();
            $joueur->performances()->delete();
            $joueur->suspenduses()->delete();
            $joueur->blesseurs()->delete();
        });
    }

    public function store_joueur($request) {
        /* $this->validate($request,[
            'firstname' => 'required',
            'lastname'  => 'required',
            'brithday' => 'required',
            'brithplace' => 'required',
            'taille'  => 'required',
            'poids'   => 'required',
            'meilleur_pied' => 'required',
            'mutation' => 'required',
            'adresse_id' => 'required',
            'contact_id' => 'required',
            'email' => 'required',
            'num_license' => 'required',
            'photo' => 'required',
            'num_tenue' => 'required',
            'date_arrive' => 'required',
            'last_equipe' => 'required',

        ]);*/

       $joueur = new Joueur();

       $joueur->first_name = $request->first_name;
       $joueur->last_name = $request->last_name;
       $joueur->birthday = $request->birthday;
       $joueur->birthplace = $request->birthplace;
       $joueur->email = $request->email;
       $joueur->num_tenue = $request->num_tenue;
       $joueur->taille = $request->taille;
       $joueur->date_arrive = $request->date_arrive;
       $joueur->poids = $request->poids;
       $joueur->mutation = $request->mutation;
       $joueur->last_equipe = $request->last_equipe;
       $joueur->meilleur_pied = $request->meilleur_pied;

       $joueur->adresse_id = $request->adresse_id;
       $joueur->contact_id = $request->contact_id;


       $joueur->num_license = $request->num_license;
       $joueur->photo = $request->photo;


       $joueur->number_anneJoué = $request->number_anneJoué;
       $joueur->malade_connu = $request->malade_connu;
       $joueur->malade = $request->malade;
       $joueur->tratiement_suivre = $request->tratiement_suivre;
       $joueur->scolaire_id = $request->scolaire_id;

        $joueur->save();
        return  response()->json([
            $joueur,
           'success' => true,
           'message' => 'player created',

         ], 200);


    }

    public function update_joueur($request , $id ){


        $joueur = Joueur::find($id);

        if (!$joueur) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, player with id ' . $id . ' cannot be found.'
            ], 400);
        }else{

                $joueur->first_name = $request->first_name;
                $joueur->last_name = $request->last_name;
                $joueur->date_naissance = $request->date_naissance;
                $joueur->taille = $request->taille;
                $joueur->poids = $request->poids;
                $joueur->meilleur_pied = $request->meilleur_pied;
                $joueur->mutation = $request->mutation;
                $joueur->adresse_id = $request->adresse_id;
                $joueur->contact_id = $request->contact_id;
                $joueur->email = $request->email;
                $joueur->num_license = $request->num_license;
                $joueur->photo = $request->photo;
                $joueur->num_tenue = $request->num_tenue;
                $joueur->date_arrive = $request->date_arrive;
                $joueur->last_equipe = $request->last_equipe;

                $joueur->save();
            return  response()->json([
                $joueur,
               'success' => true,
               'message' => 'player with id ' . $id . 'updated',
            ], 200);
        }
    }

    public function show_joueur($id)
    {
        $joueur=Joueur::find($id);


        if (!$joueur) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, player with id ' . $id . ' cannot be found.'
            ], 400);
        }

        return $joueur;
    }

    public function destroy_joueur($id)
    {
        $joueur=Joueur::find($id);

        if (!$joueur) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, player with id ' . $id . ' cannot be found.'
            ], 400);
        }else{
                $joueur->deleted =true;
                $joueur->save();
                Joueur::destroy($id);
                return response()->json(['
                success' => true,
                'message' => 'player with id ' . $id . ' deleted'
                ], 200);
            }
    }
}
