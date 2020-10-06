<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercice extends Model
{
    use SoftDeletes;

    public function store_exercice( $request)
    {
      /*   $this->validate([
           ' name' =>'required',
            'temps' =>'required',
            'exercice_theme' =>'required',
            
           
            'nb_series' =>'required', 
            'difficulte' =>'required',
            'phase_jeu' =>'required',
            'repos_series' =>'required',
           
            'objectif' =>'required',
            'consignes' =>'required',
            'realisation' =>'required',


        ]); */

        $exercice = new Exercice();

        $exercice->ExName = $request->ExName;
      $exercice->type = $request->type;
            $exercice->Duree = $request->Duree ;
            $exercice->activite = $request->activite;
           
        
   

        $exercice->save();
        return  response()->json([
            $exercice,
           'success' => true,
           'message' => 'exercice created',

         ], 200);

    }

    public function show_exercie($id)
    {
        $exercice = Exercice::find($id);
        if(!$exercice){
            return response()->json([
                'success' => false,
                'message' => 'Sorry, exercice with id ' . $id . ' cannot be found.'
            ], 400);
        }
    }

    public function update_exercice($request, $id)
    {
        $exercice = Exercice::find($id);
        if(!$exercice){
            return response()->json([
                'success' => false,
                'message' => 'Sorry, exercice with id ' . $id . ' cannot be found.'
            ], 400);
        }else{
            $exercice->ExName = $request->ExName;
            $exercice->type = $request->type;
            $exercice->Duree = $request->Duree ;
            $exercice->activite = $request->activite;
           
        
            $exercice->save();
            return  response()->json([
                $exercice,
               'success' => true,
               'message' => 'exercice updated ',

             ], 200);
        }


    }

    public function destroy_exiercie($id)
    {
        $exercice = Exercice::find($id);
        if(!$exercice){
            return response()->json([
                'success' => false,
                'message' => 'Sorry, exercice with id ' . $id . ' cannot be found.'
            ], 400);
        }
        Exercice::destroy($id);
        return response()->json(['
                success' => true,
                'message' => 'exercice with id ' . $id . ' deleted'
                ], 200);
    }



}
