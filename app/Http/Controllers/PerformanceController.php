<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Performance;
use Illuminate\Support\Str;

class PerformanceController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Performance::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $model_performance = new Performance();
       $performance = $model_performance->store_performance($request);
       return $performance;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_performance = new Performance();
        $performance = $model_performance->show_performance($id);
        return $performance;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $model_performance = new Performance();
        $performance = $model_performance->update_performance($request,$id);
        return $performance;
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model_performance = new Performance();
        $performance = $model_performance->destroy_performance($id);
        return $performance;
    }
}
