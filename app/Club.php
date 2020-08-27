<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Club extends Model
{
    use SoftDeletes;



    public function store_club( $request)
    {
        $this->validate([
            'adresse_id' => 'required',
            'contact_id' => 'required',
            'club_name' => 'required',
            'stade_name' => 'required',
            'logo' =>'required'
        ]);

        $club = new Club();

        $club->adresse_id = $request->adresse_id;
        $club->contact_id = $request->contact_id;
        $club->club_name = $request->club_name;
        $club->stade_name = $request->stade_name;
        $club->logo = $request->logo;
        $club->save();
        return response()->json([
            'succes' => true,
            'message' => 'club created ',
            $club
        ],200);

    }


    public function show_club($id)
    {
        $club = Club::find($id);

        if(!$club){
            return response()->json([
                'succes' => false,
                'message' =>'club with id ' .$id. ' nout found'
            ],400);
        }
        return $club;
    }




    public function update_club( $request, $id)
    {
        $club = Club::find($id);

        if(!$club){
            return response()->json([
                'succes' => false,
                'message' =>'club with id ' .$id. ' nout found'
            ],400);
        }

        $club->adresse_id = $request->adresse_id;
        $club->contact_id = $request->contact_id;
        $club->club_name = $request->club_name;
        $club->stade_name = $request->stade_name;
        $club->logo = $request->logo;
        $club->save();
        return response()->json([
            'succes' => true,
            'message' => 'club updated ',
            $club
        ],200);


    }


    public function destroy_club($id)
    {
        $club = Club::find($id);

        if(!$club){
            return response()->json([
                'succes' => false,
                'message' =>'club with id ' .$id. ' nout found'
            ],400);
        } else {
            Club::destroy($id);
            return response()->json([
                'succes' => true,
                'message' => 'club deleted ',

            ],200);
        }

    }
}
