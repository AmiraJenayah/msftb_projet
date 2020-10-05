<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Match extends Model
{ 
    use SoftDeletes;
     public function competition()
     {
     	return $this->hasMany('App\Competitions','id','match_id');
    }

        


    public function store_match( $request)
    {
        $match = new Match();

      //  $match->competitionId= $request->competitionId;
      $match->matchName= $request->matchName;
        $match->adversaire =$request->adversaire;
        $match->joue_a = $request->joue_a;
        $match->journee = $request->journee;
        $match->terrain = $request->terrain;
        $match->arbitre = $request->arbitre;
        $match->equipe_id =$request->equipe_id;
      // $match->score  = $request->score;
        $match->extra_time = $request->extra_time;

             if($request ->score == ''){
          $match->score = '';
        }else{  
            $match->score =$request->score;
          }
             if($request ->result == ''){
          $match->result = '';
        }else{  
            $match->result =$request->result;
          }
          
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
       
        
          if (!$match) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, match with id ' . $id . ' cannot be found.'
            ], 400);
        }
        
        else{
         $match->competitionId=$request->competitionId;
       $match->competitionName= $request->competitionName;
        $match->adversaire = $request->adversaire;
        $match->joue_a = $request->joue_a;
        $match->journee = $request->journee;
        $match->terrain = $request->terrain;
        $match->arbitre = $request->arbitre;
        $match->equipe_id = $request->equipe_id;
      // $match->score  =$request->score;
        $match->extra_time = $request->extra_time;

        if($request ->result == ""){
          $match->result = "";
        }else{  
            $match->result = $request->result;
}
                    
        
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
