<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('place')->get();
        return inertia('Events/Index', [
            'events' => $events,
        ]);
    }

    public function show(event $event)
    {
        $event->load('place');
        return inertia('Events/Show', [
            'event' => $event,
        ]);
    }
}
