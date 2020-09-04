<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Match extends Model
{ 
    use SoftDeletes;

        


    public function store_match( $request)
    {
      /*   $this->validate($request,[
            'competitionId' => 'request',
            'adversaire' => 'request',
            'joue_a' => 'request',
            'journee' => 'request',
            'terrain' => 'request',
            'arbitre' => 'request',
            'equipe_id' => 'request',
          'score' => 'request',
            'extra_time' => 'request',
            'user_id' => 'request',
       ' owner_id' =>'request',
        ]); */
        $match = new Match();

        $match->competitionId=$request->competitionId;
        $match->adversaire = $request->adversaire;
        $match->joue_a = $request->joue_a;
        $match->journee = $request->journee;
        $match->terrain = $request->terrain;
        $match->arbitre = $request->arbitre;
        $match->equipe_id = $request->equipe_id;
       $match->score  =$request->score;
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



    public function update_match($request, $id)
    {
        $match = Match::find($id);
        if(!$match){
            return response()->json([
                'success' => false,
                'message' => 'Sorry, player with id ' . $id . ' cannot be found.'
            ], 400);
        }else{
         $match->competitionId=$request->competitionId;
        $match->adversaire = $request->adversaire;
        $match->joue_a = $request->joue_a;
        $match->journee = $request->journee;
        $match->terrain = $request->terrain;
        $match->arbitre = $request->arbitre;
        $match->equipe_id = $request->equipe_id;
       $match->score  =$request->score;
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
