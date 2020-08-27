<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suspendus extends Model
{
    use SoftDeletes;
    public function joueurs(){
    	return $this->belongsToMany('App\Joueur','joueur_suspenduses','suspension_id','joueur_id');
    }


    public function store_susp( $request)
    {
        $this->validate([
            'type_susp' =>'required',
            'duree' => 'required',
            'description' => 'required',
        ]);
        $suspendus = new Suspendus();

        $suspendus->type_susp= $request->type_susp;
        $suspendus->duree = $request->duree;
       // $suspendus->date_debut= $request->date_debut ;
       // $suspendus->date_fin = $request->date_fin ;
        $suspendus->description = $request->description ;
        $suspendus->save();


        return response()->json([
            $suspendus,
            'succes' => true,
            'message' =>'Suspendus created'
        ],200);
    }


    public function show_susp($id)
    {
        $suspendus=Suspendus::find($id);



        if (!$suspendus) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, suspendus with id ' . $id . ' cannot be found.'
            ], 400);
        }

        return $suspendus;
    }


    public function update_susp($request, $id)
    {
        $suspendus=Suspendus::find($id);


        if (!$suspendus) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, suspendus with id ' . $id . ' cannot be found.'
            ], 400);
        }
        $suspendus->type_susp= $request->type_susp;
        $suspendus->duree = $request->duree;
       // $suspendus->date_debut= $request->date_debut ;
        //$suspendus->date_fin = $request->date_fin ;
        $suspendus->description = $request->description ;

        $suspendus->save();
        return  response()->json([
            $suspendus,
           'success' => true,
           'message' => 'suspendus with id ' . $id . 'updated',
        ], 200);


    }
    public function destroy_susp($id)
    {
        $suspendus=Suspendus::find($id);

        if (!$suspendus) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, suspendus with id ' . $id . ' cannot be found.'
            ], 400);
        }else{

                Suspendus::destroy($id);
                return response()->json(['
                success' => true,
                'message' => 'suspendus with id ' . $id . ' deleted'
                ], 200);
            }
    }
}
