<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adresses extends Model
{
    use SoftDeletes;
    public function joueur()
    {
    	return $this->belongsTo('App\Joueur');
    }

    public function store_adress( $request)
    {
        $this->validate([
            'adresse' =>'required',
            'code_postal' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'longitude' => 'requird',
            'latitude' => 'required',

        ]);

        $adress = new Adresses();

        $adress->adresse = $request->adresse;
        $adress->code_postal = $request->code_postal;
        $adress->ville = $request->ville;
        $adress->pays = $request->pays;
        $adress->longitude = $request->longitude;
        $adress->latitude = $request->latitude;
        $adress->save();

         return  response()->json([
        $adress,
        'success' => true,
        'message' => 'Adresses created'], 200);
    }

    public function show_adress($id)
    {
        $adress=Adresses::find($id);


        if (!$adress) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, adress with id ' . $id . ' cannot be found.'
            ], 400);
        }

        return $adress;

    }

    public function update_adress( $request, $id)
    {
        $adress=Adresses::find($id);
        if(!$adress){
            response()->json([
                'success' => false,
                'message' =>'Sorry , adress with id '.$id. ' cannout be found'
            ],400);
        }

        $adress->adresse = $request->adresse;
        $adress->code_postal = $request->code_postal;
        $adress->ville = $request->ville;
        $adress->pays = $request->pays;
        $adress->longitude = $request->longitude;
        $adress->latitude = $request->latitude;
        $adress->save();

        return response()->json([
            $adress,
            'succes' => true,
            'message' =>'adress updated'
        ],200);

    }


    public function destroy_adress($id)
    {
        $adress =Adresses::find($id);
        if(!$adress){
            response()->json([
                'success' => false,
                'message' =>'Sorry , adress with id '.$id. ' cannout be found'
            ],400);
        }else{
                $adress->deleted = true;
                $adress->save();
                Adresses::destroy($id);
                return response()->json([
                    'succes' => true,
                    'message' =>'adress deleted'
                ],200);
        }


    }

}
