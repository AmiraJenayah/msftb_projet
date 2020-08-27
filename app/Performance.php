<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Performance extends Model
{
    use SoftDeletes;
    public function joueurs()
    {
        return $this->belongsToMany('App\Joueur','joueur_performance','performance_id',
            'joueur_id');

    }

    public function store_performance( $request)
    {
        $this->validate([
            'name' =>'required',
            'slug' =>'required',
            'scale' =>'required',
        ]);
        $performance = new Performance();

        $performance->name = $request->name;
        $performance->slug =Str::slug($request->name);
        $performance->scale = $request->scale;

        $performance->save();

         return  response()->json([
        $performance,
        'success' => true,
        'message' => 'Performance created'], 200);


    }

    public function show_performance($id)
    {
        $performance=Performance::find($id);
        if(!$performance){
            return response()->json([
                'succes' => false,
                'message' =>'Performance with id '.$id. ' not founnd '
            ],400);
        }
        return $performance;
    }

    public function update_performance( $request, $id)
    {

        $performance=Performance::find($id);
        if(!$performance){
            return response()->json([
                'succes' => false,
                'message' =>' Sorry, performance with id '.$id. ' not founnd '
            ],400);
        }

        $performance->name = $request->name;

        $performance->slug =Str::slug($request->name);
        $performance->scale = $request->scale;
        $performance->save();


        return  response()->json([
            $performance,
            'success' => true,
            'message' => 'Performance updated',

        ], 200);

    }

    public function destroy_performance($id)
    {
        $performance=Performance::find($id);

        if (!$performance) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, performance with id ' . $id . ' cannot be found.'
            ], 400);
        }else{

                Performance::destroy($id);

                return response()->json([
                'success' => true,
                'message' => 'performance with id ' . $id . ' deleted'
            ], 200);
        }
    }
}
