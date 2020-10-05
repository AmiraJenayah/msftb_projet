<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Entrainement extends Model
{
    use SoftDeletes;
   


    public function store_entrainement( $request)
    {

        $entrainement = new Entrainement(); 
        $entrainement->EntrName = $request->EntrName;
        $entrainement->matchNumber = $request->matchNumber;
        $entrainement->joueurNumber = $request->joueurNumber;

        
        
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
        $entrainement->EntrName = $request->EntrName;
       
        $entrainement->nbre_journee = $request->nbre_journee;
        $entrainement->pays = $request->pays;
     
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
