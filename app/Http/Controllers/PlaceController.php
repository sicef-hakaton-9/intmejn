<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::with('place_type')->when(request('tip'), function ($query) {
            $query->where('place_type_id', request('tip'));
        })->get();
        return inertia('Places/Index', [
            'places' => $places,
        ]);
    }

    public function show(Place $place)
    {
        $place->load('place_type');
        return inertia('Places/Show', [
            'place' => $place,
        ]);
    }
}
