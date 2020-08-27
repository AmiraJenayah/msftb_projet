<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    public function joueurs(){
    	return $this->belongsToMany('App\Joueur','joueur_post','post_id','joueur_id');
    }


    public function store_post($request)
    {
        $this->validate([
            'post' =>'required',
            'type_de_sport' => 'required',
            'description' => 'required',
        ]);
        $post = new Post();

        $post->post = $request->post;
        $post->type_de_sport = $request->type_de_sport;
        $post->description = $request->description;
        $post->save();

         return  response()->json([
        $post,
        'success' => true,
        'message' => 'Post created'], 200);


    }

    public function show_post($id)
    {
        $post=Post::find($id);
        if(!$post){
            return response()->json([
                'succes' => false,
                'message' =>'Post with id '.$id. ' not founnd '
            ],400);
        }
        return $post;

    }

    public function update_post($request, $id)
    {

        $post=Post::find($id);

        if(!$post){
            return response()->json([
                'succes' => false,
                'message' =>'Post with id '.$id. ' not founnd '
            ],400);
        }
        $post->post = $request->post;
        $post->type_de_sport = $request->type_de_sport;
        $post->description = $request->description;
        $post->save();

        return  response()->json([
            $post,
            'success' => true,
            'message' => 'post updated',

        ], 200);

    }
    public function destroy_post($id)
    {
        $post=Post::find($id);

        if (!$post) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, post with id ' . $id . ' cannot be found.'
            ], 400);
        }else{

                Post::destroy($id);

                return response()->json([
                'success' => true,
                'message' => 'Post with id ' . $id . ' deleted'
            ], 200);
        }
    }
}
