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
       
       $joueur->birthplace = $request->birthplace;
       $joueur->email = $request->email;
       $joueur->num_tenue = $request->num_tenue;
       
       $joueur->taille = $request->taille;
       $joueur->date_arrive = $request->date_arrive;
       $joueur->poids = $request->poids;
       
       $joueur->mutation = $request->mutation;
       $joueur->last_equipe = $request->last_equipe;
       $joueur->meilleur_pied = $request->meilleur_pied;
       $joueur->post_player = $request->post_player;
        $joueur->number_anneJoue = $request->number_anneJoue;

       $joueur->num_license  = $request->num_license ;
      $joueur->num_mobile  = $request->num_mobile;
            $joueur->num_fixe  = $request->num_fixe;
            $joueur->adresse  = $request->adresse;
         $joueur->code_postal  = $request->code_postal;
                $joueur->ville  = $request->ville;
                 $joueur->pays  = $request->pays;
                $joueur->speed  = $request->speed;
            $joueur->endurance  = $request->endurance;
             $joueur->tactical  = $request->tactical;
            $joueur->technical  = $request->technical;
               $joueur->attack  = $request->attack;
              $joueur->defense  = $request->defense;
                 $joueur->salaire  = $request->salaire;
                    $joueur->prime  = $request->prime;
                       $joueur->contrat  = $request->contrat;
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
       $joueur->birthplace = $request->birthplace;
       $joueur->email = $request->email;
       $joueur->num_tenue = $request->num_tenue;
       $joueur->taille = $request->taille;
       $joueur->date_arrive = $request->date_arrive;
       $joueur->poids = $request->poids;
       $joueur->mutation = $request->mutation;
       $joueur->last_equipe = $request->last_equipe;
       $joueur->meilleur_pied = $request->meilleur_pied;
       $joueur->post_player = $request->post_player;
        $joueur->number_anneJoue = $request->number_anneJoue;
       $joueur->num_license  = $request->num_license ;
      $joueur->num_mobile  = $request->num_mobile;
         $joueur->num_fixe  = $request->num_fixe;
            $joueur->adresse  = $request->adresse;
         $joueur->code_postal  = $request->code_postal;
                $joueur->ville  = $request->ville;
                 $joueur->pays  = $request->pays;
                $joueur->speed  = $request->speed;
            $joueur->endurance  = $request->endurance;
             $joueur->tactical  = $request->tactical;
            $joueur->technical  = $request->technical;
               $joueur->attack  = $request->attack;
              $joueur->defense  = $request->defense;
                 $joueur->salaire  = $request->salaire;
                    $joueur->prime  = $request->prime;
                       $joueur->contrat  = $request->contrat;
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
