<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Joueur extends Model
{
    use SoftDeletes;
    // public function contact()
    // {
    // 	return $this->hasOne('App\Contact','id','contact_id');
    // }

    // public function adresses()
    // {
    // 	return $this->hasMany('App\Adresses','id','adresse_id');
    // }

    // public function posts()
    // {
    //     return $this->belongsToMany('App\Post','joueur_post','joueur_id','post_id');
    // }

    // public function performances()
    // {
    //     return $this->belongsToMany('App\Performance','joueur_performance','joueur_id','performance_id')->select(['joueur_id','performance_id','value','name','slug']);
    // }

    // public function suspenduses(){
    //     return $this->belongsToMany('App\Suspendus','joueur_suspenduses','joueur_id','suspension_id');
    // }

    // public function blesseurs(){
     
    //    return $this->belongsToMany('App\Blesseur','joueur_blesseur','joueur_id','blesseur_id');
    // }

    /* public static function boot(){
        parent::boot();

        static::deleting(function(Joueur $joueur){
            $joueur->contact()->delete();
            $joueur->adresse()->delete();
            $joueur->posts()->delete();
            $joueur->performances()->delete();
            $joueur->suspenduses()->delete();
            $joueur->blesseurs()->delete();
        });
    } */

    public function store_joueur($request) {
      

       $joueur = new Joueur();

       $joueur->first_name = $request->first_name;
       $joueur->last_name = $request->last_name;
       $joueur->birthday = $request->birthday;
       $joueur->email = $request->email;
       $joueur->numero_tenue = $request->numero_tenue;
       $joueur->hauteur = $request->hauteur;
       $joueur->etatdeSante = $request->etatdeSante;
       $joueur->poids = $request->poids;
              $joueur->salaire = $request->salaire;
                     $joueur->primes = $request->primes;


 
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
       $joueur->birthday = $request->birthday;
       $joueur->email = $request->email;
       $joueur->numero_tenue = $request->numero_tenue;
       $joueur->hauteur = $request->hauteur;
       $joueur->etatdeSante = $request->etatdeSante;
       $joueur->poids = $request->poids;
              $joueur->salaire = $request->salaire;
                     $joueur->primes = $request->primes;


      
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
              //  $joueur->deleted =true;
               // $joueur->save();
                Joueur::destroy($id);
                return response()->json(['
                success' => true,
                'message' => 'player with id ' . $id . ' deleted'
                ], 200);
            }
    }
}
