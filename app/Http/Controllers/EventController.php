<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('frontend.events', [
            'events' => Event::paginate(6)
        ]);
    }

    public function show($id)
    {
        return view('frontend.events_details', [
            'event' => Event::findOrFail($id),
        ]);
    }
}
