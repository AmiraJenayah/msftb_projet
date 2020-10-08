<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Entrainement extends Model
{
 //   use SoftDeletes;
   

////////////////////////////////
    public function store_entrainement( $request)
    {

        $entrainement = new Entrainement(); 
        
                $entrainement->EntName = $request->EntName;

        $entrainement->Period = $request->Period;
        $entrainement->Lieu = $request->Lieu;
        $entrainement->Horaire = $request->Horaire;
                $entrainement->Nb_exercice = $request->Nb_exercice;


        
        
        $entrainement->save();
        return response()->json([
            'succes' => true,
            'message' => 'entrainement created',
            $entrainement
        ],200);
    }


    public function show_entrainement($id)
    {
        $entrainement = Entrainement::find($id);

        if(!$entrainement){
            return response()->json([
                'succes' => false,
                'message' => ' entrainement with id '.$id. 'not found'
                ],400);
        }
        return $entrainement;
    }




    public function update_entrainement( $request, $id)
    {
        $entrainement = Entrainement::find($id);

        if(!$entrainement){
            return response()->json([
                'succes' => false,
                'message' => ' entrainement with id '.$id. 'not found'
                ],400);
        }
       
        $entrainement->Period = $request->Period;
        $entrainement->Lieu = $request->Lieu;
        $entrainement->Horaire = $request->Horaire;
                $entrainement->Nb_exercice = $request->Nb_exercice;


     
        $entrainement->save();
        return response()->json([
            'succes' => true,
            'message' => 'entrainement updated',
            $entrainement
        ],200);
    }


    public function destroy_entrainement($id)
    {
        $entrainement = Entrainement::find($id);

        if(!$entrainement){
            return response()->json([
                'succes' => false,
                'message' => ' entrainement with id '.$id. 'not found'
                ],400);
        } else{
            Entrainement::destroy($id);
            return response()->json([
                'succes' => true,
                'message' => 'entrainement with id '.$id.' deleted'
            ],200);
        }
    }
}
