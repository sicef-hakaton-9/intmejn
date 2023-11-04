<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return inertia('Places/Index', [
            'places' => $places,
        ]);
    }

    public function show(Place $place)
    {
        return inertia('Places/Show', [
            'place' => $place,
        ]);
    }
}
