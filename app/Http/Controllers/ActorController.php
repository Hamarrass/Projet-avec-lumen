<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{


    //show all  actors
    public function all()
    {

        return response()->json(Actor::all());
    }

    //show one actor
    public function read($id)
    {
        return response()->json(Actor::find($id));
    }

    //create  new actor
    public function create(Request $request)
    {


        $actor = Actor::create($request->all());

        return response()->json($actor, 201);
    }

    //update actor info
    public function update($id, Request $request)
    {
        $actor = Actor::findOrFail($id);
        $actor->update($request->all());

        return response()->json($actor, 200);
    }

    //delete actor
    public function delete($id)
    {
        Actor::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
