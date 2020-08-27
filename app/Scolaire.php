<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scolaire extends Model
{
    use SoftDeletes;

    public function store_scolaire( $request)
    {
        $this->validate([
            'etablissement' =>'required',
            'classe_actulle' =>'required',
            'nom_prof_principale'=>'required'
        ]);
        $scolaire = new Scolaire();
        $scolaire->etablissement = $request->etablissement;
        $scolaire->classe_actulle = $request->classe_actulle;
        $scolaire->nom_prof_principale = $request->nom_prof_principale;
        $scolaire->save();
        return response()->json([
            $scolaire,
            'succes' =>true,
            'message' => 'player school created'
        ],200);
    }

    public function show_scolaire($id)
    {
        $scolaire = Scolaire::find($id);
        if(!$scolaire){
            return response()->json([
                'succes' => false,
                'message' => 'player school with id'.$id.'not found'
            ],400);
        }
        return $scolaire;
    }



    public function update_scolaire( $request, $id)
    {
        $scolaire = Scolaire::find($id);
        if(!$scolaire){
            return response()->json([
                'succes' => false,
                'message' => 'player school with id'.$id.'not found'
            ],400);
        }else{
            $scolaire->etablissement = $request->etablissement;
            $scolaire->classe_actulle = $request->classe_actulle;
            $scolaire->nom_prof_principale = $request->nom_prof_principale;
            $scolaire->save();
            return response()->json([
                $scolaire,
                'succes' =>true,
                'message' => 'player school updated'
            ],200);
        }

    }


    public function destroy_scolaire($id)
    {
        $scolaire = Scolaire::find($id);
        if(!$scolaire){
            return response()->json([
                'succes' => false,
                'message' => 'player school with id'.$id.'not found'
            ],400);
        }else{
            Scolaire::destroy($id);
            return response()->json([
                $scolaire,
                'succes' =>true,
                'message' => 'player school deleted'
            ],200);
        }
    }

}
