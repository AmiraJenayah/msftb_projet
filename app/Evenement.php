<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evenement extends Model
{
    use SoftDeletes;


    public function store_evenement( $request)
    {
        $this->validate([
        'event_type_id' =>'required',
        'club_id' => 'required',
        'date_time' => 'required',
        'lieu' => 'required',
        'title' => 'required',
        'theme_id' => 'required',
        'seance_id' => 'required',
        'section_id' => 'required',
        'categorie_id' => 'required',
        'equipe_id' => 'required',
        'commentaires' =>'required',
        ]);

        $evenement = new Evenement();
        $evenement->event_type_id = $request->event_type_id;
        $evenement->club_id = $request->club_id;
        $evenement->date_time =$request->date_time;
        $evenement->lieu = $request->lieu;
        $evenement->title = $request->title;
        $evenement->theme_id = $request->theme_id;
        $evenement->seance_id = $request->seance_id;
        $evenement->section_id = $request->section_id;
        $evenement->categorie_id = $request->categorie_id;
        $evenement->equipe_id = $request->equipe_id;
        $evenement->commentaires = $request->commentaire;
        $evenement->save();
        return response()->json([
            'success' => true ,
            'message' =>'evenement create'
        ],200);

    }


    public function show_evenemet($id)
    {
        $evenement = Evenement::find($id);
        if(!$evenement){
            return response()->json([
                'sucess' => false,
                'message' =>'Event with '.$id. 'not found'
            ],400);
        }
        return $evenement;
    }




    public function update_envenement( $request, $id)
    {
        $evenement = Evenement::find($id);
        if(!$evenement){
            return response()->json([
                'sucess' => false,
                'message' =>'Event with id '.$id. 'not found'
            ],400);
        }
        $evenement->event_type_id = $request->event_type_id;
        $evenement->club_id = $request->club_id;
        $evenement->date_time =$request->date_time;
        $evenement->lieu = $request->lieu;
        $evenement->title = $request->title;
        $evenement->theme_id = $request->theme_id;
        $evenement->seance_id = $request->seance_id;
        $evenement->section_id = $request->section_id;
        $evenement->categorie_id = $request->categorie_id;
        $evenement->equipe_id = $request->equipe_id;
        $evenement->commentaires = $request->commentaire;
        $evenement->save();
        return response()->json([
            'success' => true ,
            'message' =>'event updated'
        ],200);

    }


    public function destroy_envenemt($id)
    {
        $evenement = Evenement::find($id);
        if(!$evenement){
            return response()->json([
                'sucess' => false,
                'message' =>'Event with '.$id. 'not found'
            ],400);
        }
        Evenement::destroy($id);
        return response()->json([
            'sucess' => true,
            'message' =>'Event with  id'.$id.'deleted'
        ],200);
    }

}
