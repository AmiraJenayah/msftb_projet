<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Match extends Model
{
    use SoftDeletes;

        protected $table = 'matchs';

    //
    protected $guarded = [];


    public function store_match( $request)
    {
        $this->vlidate([
            'competitionID' => 'required',
            'adversaire' => 'required',
           // 'tour' => 'required',
            'joue_a' => 'required',
          //  'phase' => 'required',
          //  'lieu' => 'required',
           // 'date_time' => 'required',
            'journee' => 'required',
           // 'schema_jeu' => 'required',
            'terrain' => 'required',
            'equipe_id' => 'required',
         //   'capitaine_id' => 'required',
         //   'score' => 'required',
         //   'but_in' => 'required',
          //  'but_out' => 'required',
          //  'status' => 'required',
         //   'is_prolongation' => 'required',
            'extra_time' => 'required',
        ]);
        $match = new Match();

        $match->competitionID=$request->competitionID;
        $match->adversaire = $request->adversaire;
     //   $match->tour = $request->tour;
        $match->joue_a = $request->joue_a;
     //   $match->phase = $request ->phase;
     //   $match->lieu = $request->lieu;
      //  $match->date_time = $request->date_time;
        $match->journee = $request->journee;
      //  $match->schema_jeu = $request->schema_jeu;
        $match->terrain = $request->terrain;
        $match->arbitre = $request->arbitre;
        $match->equipe_id = $request->equipe_id;
     //   $match->capitaine_id = $request->capitaine_id;
     //   $match->score  =$request->score;
     //   $match->but_in = $request->but_in;
     //   $match->but_out = $request->but_out;
     //   $match->status = $request->status;
     //   $match->is_prolongation = $request->is_prolongation;
        $match->extra_time = $request->extra_time;
        $match->user_id = $request->user_id;
        $match->owner_id = $request->owner_id;
        $match->save();
        return  response()->json([
            $match,
           'success' => true,
           'message' => 'match created',

         ], 200);



    }

    public function show_match($id)
    {
        $match = Match::find($id);
        if (!$match) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, match with id ' . $id . ' cannot be found.'
            ], 400);
        }

        return $match;

    }

    public function update_match( $request, $id)
    {
        $match = Match::find($id);
        if(!$match){
            return response()->json([
                'success' => false,
                'message' => 'Sorry, player with id ' . $id . ' cannot be found.'
            ], 400);
        }else{
            $match->competition_id =$request->competition_id;
            $match->adversaire = $request->adversaire;
     //       $match->tour = $request->tour;
            $match->joue_a = $request->joue_a;
        //    $match->phase = $request ->phase;
        //    $match->lieu = $request->lieu;
         //   $match->date_time = $request->date_time;
            $match->journee = $request->journee;
       //     $match->schema_jeu = $request->schema_jeu;
            $match->terrain = $request->terrain;
            $match->arbitre = $request->arbitre;
            $match->equipe_id = $request->equipe_id;
      //      $match->capitaine_id = $request->capitaine_id;
       //     $match->score  =$request->score;
      //      $match->but_in = $request->but_in;
      //      $match->but_out = $request->but_out;
      //      $match->status = $request->status;
        //    $match->is_prolongation = $request->is_prolongation;
            $match->extra_time = $request->extra_time;
            $match->save();
            return  response()->json([
                $match,
               'success' => true,
               'message' => 'match update',

             ], 200);
        }
    }

    public function destroy_match($id)
    {
        $match = Match::find($id);

        if(!$match){
            return response()->json([
                'success' => false,
                'message' => 'Sorry, match with id ' . $id . ' cannot be found.'
            ], 400);
        }else{
            Match::destroy($id);
            return response()->json(['
            success' => true,
            'message' => 'match with id ' . $id . ' deleted'
            ], 200);
        }
    }
}
