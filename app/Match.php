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

      $match->matchName= $request->matchName;
          $match->date = $request->date;
        $match->adversaire =$request->adversaire;
        $match->tenue = $request->tenue;
        $match->stade = $request->stade;
        $match->arbitre = $request->arbitre;
        $match->equipe =$request->equipe;
    
     
          
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
                $match->matchName= $request->matchName;
    $match->date = $request->date;
      $match->adversaire =$request->adversaire;
        $match->tenue = $request->tenue;
        $match->stade = $request->stade;
        $match->arbitre = $request->arbitre;
        $match->equipe =$request->equipe;
    
     
                    
        
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
