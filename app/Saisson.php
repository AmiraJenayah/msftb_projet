<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Saisson extends Model
{
    use SoftDeletes;


    public function store_saisson( $request)
    {
        $this->validate([
            'name' =>'required',
            'date_debut' =>'required',
            'date_fin' =>'required',


        ]);

        $saisson = new Saisson();
        $saisson->name = $request->name;
        $saisson->date_debut = $request->date_debut;
        $saisson->date_fin = $request->date_fin;
        $saisson->save();
        return response()->json([
            'success' =>true,
            'message' => 'Saisson created'
        ],200);
    }



    public function show_saisson($id)
    {
        $saisson = Saisson::find($id);
        if(!$saisson){
            return response()->json([
                'success' =>false,
                'message' => 'Saisson with id'.$id.'not found'
            ],400);
        }
        return $saisson;
    }


    public function update_saisson( $request, $id)
    {
        $saisson = Saisson::find($id);
        if(!$saisson){
            return response()->json([
                'success' =>false,
                'message' => 'Saisson with id'.$id.'not found'
            ],400);
        }
        $saisson->name = $request->name;
        $saisson->date_debut = $request->date_debut;
        $saisson->date_fin = $request->date_fin;
        $saisson->save();
        return response()->json([
            'success' =>true,
            'message' => 'Saisson updated'
        ],200);
    }


    public function destroy_saisson($id)
    {
        $saisson = Saisson::find($id);
        if(!$saisson){
            return response()->json([
                'success' =>false,
                'message' => 'Saisson with id'.$id.'not found'
            ],400);
        }
        Saisson::destroy($id);
        return response()->json([
            'success' =>true,
            'message' => 'Saisson deleted'
        ],200);
    }
}
