<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Psy\Util\Str;


class Type_Event extends Model
{
    use SoftDeletes;
    public function store_tyEv( $request)
    {
        $this->validate([
            'name' => 'rquired',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'description' =>'required'
        ]);
        $type_event = new Type_Event();
        $type_event->name = $request->name;
        $type_event->date_debut = $request->date_debut;
        $type_event->date_fin = $request->date_fin;
        $type_event->description = $request->description;
        $type_event->save();
        return response()->json([
            $type_event,
            'sucess' => true,
            'message' =>'type_event created'
        ],200);


    }


    public function show_tyEv($id)
    {
        $type_event= Type_Event::find($id);
        if(!$type_event){
            return response()->json([
                'success' => false,
                'message' =>'type event with id '.$id. ' not found'
            ],400);
        }
        return $type_event;
    }




    public function update_tyEv( $request, $id)
    {
        $type_event= Type_Event::find($id);
        if(!$type_event){
            return response()->json([
                'success' => false,
                'message' =>'type event with id '.$id. ' not found'
            ],400);
        }
        $type_event->name = $request->name;
        $type_event->date_debut = $request->date_debut;
        $type_event->date_fin = $request->date_fin;
        $type_event->description = $request->description;
        $type_event->save();
        return response()->json([
            $type_event,
            'sucess' => true,
            'message' =>'type_event updated'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type_Event  $type_Event
     * @return \Illuminate\Http\Response
     */
    public function destroy_tyEv($id)
    {
        $type_event= Type_Event::find($id);
        if(!$type_event){
            return response()->json([
                'success' => false,
                'message' =>'type event with id '.$id. ' not found'
            ],400);
        }
        Type_Event::destroy($id);
        return response()->json([

            'sucess' => true,
            'message' =>'type_event deleted'
        ],200);
    }
}
