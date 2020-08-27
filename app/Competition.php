<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Competition extends Model
{
    use SoftDeletes;

    public function store_competition( $request)
    {
        $this->validate([
            'name' =>'required',
            'comp_type_id' =>'required',
            'niveau_id' =>'required',
            'saison_id' => 'required',
            'section_id' => 'required',
            'nbre_journee' => 'required',
            'categorie_id' => 'required',
        ]);

        $comp = new Competition();
        $comp->name = $request->name;
        $comp->comp_type_id = $request->comp_type_id;
        $comp->niveau_id = $request->niveau_id;
        $comp->saison_id = $request->saison_id;
        $comp->nbre_journee = $request->nbre_journee;
        $comp->categorie = $request->categorie;
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
        $comp->name = $request->name;
        $comp->comp_type_id = $request->comp_type_id;
        $comp->niveau_id = $request->niveau_id;
        $comp->saison_id = $request->saison_id;
        $comp->nbre_journee = $request->nbre_journee;
        $comp->categorie = $request->categorie;
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
