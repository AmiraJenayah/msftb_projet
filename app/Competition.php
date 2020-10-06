<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Competition extends Model
{
    use SoftDeletes;
    public function match()
     {
     	return $this->hasMany('App\Match','id','match_id');
    }
 public static function boot(){
        parent::boot();

        static::deleting(function(Competition $comp){
            $comp->match()->delete();
        
        });
    } 

    public function store_competition( $request)
    {
       

        
        $comp = new Competition();
         $comp->Compname = $request->Compname;

        $comp->Saison = $request->Saison;
        $comp->Prix = $request->Prix;
                $comp->Number_equipe = $request->Number_equipe;


        $comp->save();
        return response()->json([
            'succes' => true,
            'message' => 'competition created',
            $comp
        ],200);
    }


    public function show_competition($id)
    {
        $comp = Competition::find($id);

        if(!$comp){
            return response()->json([
                'succes' => false,
                'message' => ' competition with id '.$id. 'not found'
                ],400);
        }
        return $comp;
    }




    public function update_competition( $request, $id)
    {
        $comp = Competition::find($id);

        if(!$comp){
            return response()->json([
                'succes' => false,
                'message' => ' competition with id '.$id. 'not found'
                ],400);
        }
        $comp->Compname = $request->Compname;

        $comp->Saison = $request->Saison;
        $comp->Prix = $request->Prix;
                $comp->Number_equipe = $request->Number_equipe;




        $comp->save();
        return response()->json([
            'succes' => true,
            'message' => 'competition updated',
            $comp
        ],200);
    }


    public function destroy_competition($id)
    {
        $comp = Competition::find($id);

        if(!$comp){
            return response()->json([
                'succes' => false,
                'message' => ' competition with id '.$id. 'not found'
                ],400);
        } else{
            Competition::destroy($id);
            return response()->json([
                'succes' => true,
                'message' => 'competition with id '.$id.' deleted'
            ],200);
        }
    }
}
