<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Famille extends Model
{
    use SoftDeletes;
    public function store_famille( $request)
    {
        $this->validate([
            'situation_parent'=>'required',
            'nom_pere' => 'required',
            'nom_mere' => 'required',
            'travail_pere' =>'required',
            'travail_mere' =>'required',
            'tel_pere' => 'required',
            'tel_mere' => 'required',
            'fix_pere' => 'required',
            'fix_mere' => 'required',
            'email_pere' => 'required',
            'email_mere' => 'required'

        ]);
        $famille = new Famille();
        $famille->situation_parent = $request->situation_parent;
        $famille->nom_pere = $request->nom_pere;
        $famille->nom_mere = $request->nom_mere;
        $famille->travail_pere = $request->travail_pere;
        $famille->travail_mere = $request->travail_mere;
        $famille->tel_pere = $request->tel_pere;
        $famille->tel_mere = $request->tel_mere;
        $famille->fix_pere = $request->fix_pere;
        $famille->fix_mere = $request->fix_mere;
        $famille->email_pere = $request->email_pere;
        $famille->email_mere = $request->email_mere;
        $famille->save();
        return response()->json([
            $famille,
            'succes'=>true,
            'message' => 'famlly player created'
        ],200);
    }


    public function show_famille($id)
    {
        $famille = Famille::find($id);
        if(!$famille){
            return response()->json([
                'succes' => false,
                'message' => 'famlly with id '.$id.'not found'
            ],400);
        }
        return $famille;
    }




    public function update_famille( $request, $id)
    {

        $famille = Famille::find($id);
        if(!$famille){
            return response()->json([
                'succes' => false,
                'message' => 'famlly with id '.$id.'not found'
            ],400);
        }else{
        $famille->situation_parent = $request->situation_parent;
        $famille->nom_pere = $request->nom_pere;
        $famille->nom_mere = $request->nom_mere;
        $famille->travail_pere = $request->travail_pere;
        $famille->travail_mere = $request->travail_mere;
        $famille->tel_pere = $request->tel_pere;
        $famille->tel_mere = $request->tel_mere;
        $famille->fix_pere = $request->fix_pere;
        $famille->fix_mere = $request->fix_mere;
        $famille->email_pere = $request->email_pere;
        $famille->email_mere = $request->email_mere;
        $famille->save();
        return response()->json([
            $famille,
            'succes'=>true,
            'message' => 'famlly player updated'
        ],200);
        }
    }


    public function destroy_famille($id)
    {
        $famille = Famille::find($id);
        if(!$famille){
            return response()->json([
                'succes' => false,
                'message' => 'famlly with id '.$id.'not found'
            ],400);
        }
        Famille::destroy($id);
        return response()->json([
            $famille,
            'succes'=>true,
            'message' => 'famlly player deleted'
        ],200);

    }
}
