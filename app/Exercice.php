<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercice extends Model
{
    use SoftDeletes;

    public function store_exercice( $request)
    {
        $this->validate([
           ' name' =>'required',
            'temps' =>'required',
            'partie_id' =>'required',
            'exercice_theme_id' =>'required',
            'difficulte' =>'required',
            'phase_jeu' =>'required',
            'procede_id' =>'required',
            'pedagogie_id' =>'required',
            'intensite_id' =>'required',
            'nb_series' =>'required',
            'repos_series' =>'required',
            'recuperation_id' =>'required',
            'objectif' =>'required',
            'consignes' =>'required',
            'realisation' =>'required',
            'schema_url' =>'required',

        ]);

        $exercice = new Exercice();

        $exercice->name = $request-> name;
        $exercice->temps = $request-> temps;
        $exercice-> partie_id = $request->partie_id ;
        $exercice->exercice_theme_id = $request->exercice_theme_id ;
        $exercice->difficulte = $request-> difficulte;
        $exercice-> phase_jeu= $request->phase_jeu ;
        $exercice->procede_id = $request->procede_id ;
        $exercice-> pedagogie_id= $request-> pedagogie_id;
        $exercice->intensite_id = $request->intensite_id ;
        $exercice->nb_series = $request-> nb_series;
        $exercice-> repos_series= $request->repos_series ;
        $exercice->recuperation_id = $request->recuperation_id ;
        $exercice->objectif = $request->objectif ;
        $exercice->consignes = $request->consignes ;
        $exercice->realisation = $request->realisation ;
        $exercice->schema_url = $request->schema_url ;

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
            $exercice->name = $request-> name;
            $exercice->temps = $request-> temps;
            $exercice-> partie_id = $request->partie_id ;
            $exercice->exercice_theme_id = $request->exercice_theme_id ;
            $exercice->difficulte = $request-> difficulte;
            $exercice-> phase_jeu= $request->phase_jeu ;
            $exercice->procede_id = $request->procede_id ;
            $exercice-> pedagogie_id= $request-> pedagogie_id;
            $exercice->intensite_id = $request->intensite_id ;
            $exercice->nb_series = $request-> nb_series;
            $exercice-> repos_series= $request->repos_series ;
            $exercice->recuperation_id = $request->recuperation_id ;
            $exercice->objectif = $request->objectif ;
            $exercice->consignes = $request->consignes ;
            $exercice->realisation = $request->realisation ;
            $exercice->schema_url = $request->schema_url ;

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
