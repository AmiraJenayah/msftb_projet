<?php

namespace App\Http\Controllers;

use App\Suspendus;
use Illuminate\Http\Request;

class SuspendusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Suspendus::all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model_susp = new Suspendus();
        $suspendus = $model_susp->store_susp($request);
        return $suspendus;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suspendus  $suspendus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_susp = new Suspendus();
        $suspendus = $model_susp->store_susp($id);
        return $suspendus;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suspendus  $suspendus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $model_susp = new Suspendus();
        $suspendus = $model_susp->store_susp($request,$id);
        return $suspendus;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suspendus  $suspendus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model_susp = new Suspendus();
        $suspendus = $model_susp->store_susp($id);
        return $suspendus;
    }
}
