<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return inertia('Events/Index', [
            'events' => $events,
        ]);
    }

    public function show(event $event)
    {
        return inertia('Events/Show', [
            'event' => $event,
        ]);
    }
}
