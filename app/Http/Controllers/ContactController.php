<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all()->where('deleted' , false);
        return $contact;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model_contact = new Contact();
        $contact = $model_contact->store_contact($request);
        return $contact ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_contact = new Contact();
        $contact = $model_contact->show_contact($id);
        return $contact ;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update_contact(Request $request,$id)
    {
        $model_contact = new Contact();
        $contact = $model_contact->update_contact($request,$id);
        return $contact ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
/* 
        $model_contact = new Contact();
        $contact = $model_contact->destory_contact($id); */
         $contact = contact::find($id);
        $contact->delete();
        return $contact ;

    }

}
