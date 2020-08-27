<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{
    use SoftDeletes;

    public function store_categorie($request)
    {
        $this->validation([
            'title' => 'required',
            'description' => 'required',
            'type_sport' => 'required',
            'number_joueurs' => 'required',
        ]);

        $categorie = new Categorie();

        $categorie->title = $request->title;
        $categorie->description = $request->description ;
        $categorie->type_sport = $request->type_sport;
        $categorie->number_joueurs = $request->number_joueurs;
        $categorie->save();
        return response()->json([
            $categorie,
           'success' => true,
           'message' => 'categorie created'
        ],200);

    }


    public function show_categorie($id)
    {
        $categorie = Categorie::find($id);
        if(!$categorie){
            return response()->json([
                'success' =>false,
                'message' => 'categorie with' .$id .'not found'
            ],400);
        }
        return $categorie;
    }



    public function update_categorie($request, $id)
    {
        $categorie = Categorie::find($id);
        if(!$categorie){
            return response()->json([
                'success' =>false,
                'message' => 'categorie with' .$id .'not found'
            ],400);
        }
        $categorie->title = $request->title;
        $categorie->description = $request->description ;
        $categorie->type_sport = $request->type_sport;
        $categorie->number_joueurs = $request->number_joueurs;
        $categorie->save();
        return response()->json([
            $categorie,
           'success' => true,
           'message' => 'categorie updated'
        ],200);

    }


    public function destroy_categorie($id)
    {
        $categorie = Categorie::find($id);
        if(!$categorie){
            return response()->json([
                'success' =>false,
                'message' => 'categorie with' .$id .'not found'
            ],400);
        }
        Categorie::destroy($id);
        return response()->json([
            'success' => true,
            'message' =>'categorie with '. $id .'deleted'

        ],200);

    }

}
