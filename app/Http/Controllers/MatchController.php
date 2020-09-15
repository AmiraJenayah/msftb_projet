<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        /* return Match::all();
    
    return Response::json($matchs); */
            return Match::all()->where ('deleted' , false);
	
     	dd($jsonData);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $model_match = new Match();
        $match = $model_match->store_match($request);
        return $match; 
        
       /*  $match = Match::create($request->all());
        return response()->json(['message'=> 'match created', 
        'match' => $match]); */
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_match = new Match();
        $match = $model_match->show_match($id);
        return $match;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $model_match = new Match();
        $match = $model_match->update_match($request,$id);
        return $match;
     

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model_match = new Match();
        $match = $model_match->destroy_match($id);
        return $match;
        
       
    }
}
