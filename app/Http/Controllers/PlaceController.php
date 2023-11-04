<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::with('place_type')->get();
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
