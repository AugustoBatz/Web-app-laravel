<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaceRequest;
use App\Place;
use Log;


class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::latest()->get();
        $simplePlaces = [];
        foreach ($places as $place) {
            $simplePlace = [
                "id"=> $place->id,
                "title" => $place->title,
                "description" => $place->description,
                "score" => $place->score,
                "img_source" => $place->img_source,
            ];            
            array_push($simplePlaces, $simplePlace);
        }
        return response($simplePlaces, 200);
    }

    public function store(PlaceRequest $request)
    {
        $place = Place::create($request->all());

        return response(['data' => $place ], 201);

    }

    public function show($id)
    {
        $place = Place::findOrFail($id);
        $simplePlace = [
            "title" => $place->title,
            "description" => $place->description,
            "score" => $place->score,
            "img_source" => $place->img_source,
        ];   
        return response($simplePlace, 200);
    }

    public function update(PlaceRequest $request, $id)
    {
        $place = Place::findOrFail($id);
        $place->update($request->all());

        return response(['data' => $place ], 200);
    }

    public function destroy($id)
    {
        Place::destroy($id);

        return response(['data' => null ], 204);
    }
}
