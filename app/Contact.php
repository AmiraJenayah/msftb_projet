<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{

    use SoftDeletes;
    public function joueur()
    {
    	return $this->belongsTo('App\Joueur');
    }

    public function store_contact( $request)
    {

        $this->validate($request,[
            'num_mobile' => 'required',
            'num_fixe'  => 'required',
            'fax' => 'required',
        ]);


        $contact = new Contact();

        $contact->num_mobile = $request->num_mobile;
        $contact->num_fixe = $request->num_fixe;
        $contact->fax = $request->fax;
        $contact->save();

         return  response()->json([
        $contact,
        'success' => true,
        'message' => 'Contact created'], 200);
    }


    public function show_contact($id)
    {
        $contact=Contact::find($id);


        if (!$contact) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, contact with id ' . $id . ' cannot be found.'
            ], 400);
        }

        return $contact;
    }


    public function update_contact( $request,$id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, contact with id ' . $id . ' cannot be found.'
            ], 400);
        }
        $contact->num_mobile = $request->um_mobile;
        $contact->num_fixe = $request->num_fixe;
        $contact->fax = $request->fax;
        $contact->save();
         return  response()->json([
                    $contact,
                    'success' => true,
                    'message' => 'contact updated',

                ], 200);
    }


    public function destroy_contact($id)
    {
        $contact=Contact::find($id);

        if (!$contact) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, contact with id ' . $id . ' cannot be found.'
            ], 400);
        }else{
                $contact->deleted =true;
                $contact->save();
                Contact::destroy($id);

                return response()->json(['
                success' => true,
                'message' => 'contact with id ' . $id . ' deleted'
            ], 200);
        }

    }
}
