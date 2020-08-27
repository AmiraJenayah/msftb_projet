<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blesseur extends Model
{

    use SoftDeletes;
    public function joueurs(){
    	return $this->belongsToMany('App\Joueur','joueur_blesseur','blesseur_id','joueur_id');
    }

    public function store_blesseur( $request)
    {
        $this->validate($request,[
            'type_blesse' => 'required',
            'duree'  => 'required',
            'description' => 'required',

        ]);

        $blesseur = new Blesseur();

        $blesseur->type_blesse->$request->type_blesse;
        $blesseur->duree->$request->duree;
        $blesseur->description->$request->description;

        $blesseur->save();
        return  response()->json([
                         $blesseur,
                        'success' => true,
                        'message' => 'Contact created'],
                         200);
    }

    public function show_blesseur($id)
    {
        $blesseur = Blesseur::find($id);
        if (!$blesseur) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, blesseur with id ' . $id . ' cannot be found.'
            ], 400);
        }

        return $blesseur;
    }



    public function update_blesseur( $request, $id)
    {
        $blesseur = Blesseur::find($id);
        if (!$blesseur) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, blesseur with id ' . $id . ' cannot be found.'
            ], 400);
        }

        $blesseur->type_blesse->$request->type_blesse;
        $blesseur->duree->$request->duree;
        $blesseur->description->$request->description;

        $blesseur->save();
        return  response()->json([
                           $blesseur,
                            'success' => true,
                            'message' => 'Contact created'],
                            200);

    }

    public function destroy_blesseur($id)
    {
        $blesseur=Blesseur::find($id);

        if (!$blesseur) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, blesseur with id ' . $id . ' cannot be found.'
            ], 400);
        }else{

                Blesseur::destroy($id);

                return response()->json(['
                success' => true,
                'message' => 'blesseur with id ' . $id . ' deleted'
            ], 200);
        }

    }
}
