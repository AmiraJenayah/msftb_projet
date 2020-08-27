<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipe extends Model
{
    use SoftDeletes;
    public function store_equipe( $request)
    {
        $this->vlidate([
            'name' => 'required',
            'slug' => 'required',
            'section_id' => 'required',
            'categorie_id' => 'required',


        ]);
        $equipe =new Equipe();

        $equipe->name =$request->name;
        $equipe->slug = $request->slug;
        $equipe->section_id = $request->section_id;
        $equipe->categorie_id = $request->categorie_id;

        $equipe->save();
        return  response()->json([
            $equipe,
           'success' => true,
           'message' => 'equipe created',

         ], 200);



    }

    public function show_equipe($id)
    {
        $equipe = Equipe::find($id);
        if (!$equipe) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, equipe with id ' . $id . ' cannot be found.'
            ], 400);
        }

        return $equipe;

    }

    public function update_equipe( $request, $id)
    {
        $equipe = Equipe::find($id);
        if (!$equipe) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, equipe with id ' . $id . ' cannot be found.'
            ], 400);

        }else{
            $equipe->name =$request->name;
            $equipe->slug = $request->slug;
            $equipe->section_id = $request->section_id;
            $equipe->categorie_id = $request->categorie_id;

            $equipe->save();
            return  response()->json([
                $equipe,
               'success' => true,
               'message' => 'equipe updated',

             ], 200);
        }
    }

    public function destroy_equipe($id)
    {
        $equipe = Equipe::find($id);

        if(!$equipe){
            return response()->json([
                'success' => false,
                'message' => 'Sorry, equipe with id ' . $id . ' cannot be found.'
            ], 400);
        }else{
            Equipe::destroy($id);
            return response()->json(['
            success' => true,
            'message' => 'equipe with id ' . $id . ' deleted'
            ], 200);
        }
    }
}
