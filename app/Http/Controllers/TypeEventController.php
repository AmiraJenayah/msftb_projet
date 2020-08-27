<?php

namespace App\Http\Controllers;

use App\Type_Event;
use Illuminate\Http\Request;

class TypeEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Type_Event::all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model_tyEv = new Type_Event();
        $type_event = $model_tyEv->store_tyEv($request);
        return $type_event;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type_Event  $type_Event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_tyEv = new Type_Event();
        $type_event = $model_tyEv->show_tyEv($id);
        return $type_event;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type_Event  $type_Event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model_tyEv = new Type_Event();
        $type_event = $model_tyEv->update_tyEv($request,$id);
        return $type_event;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type_Event  $type_Event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model_tyEv = new Type_Event();
        $type_event = $model_tyEv->destroy_tyEv($id);
        return $type_event;
    }
}
