<?php

namespace App\Http\Controllers;

use App\Event;
use App\PageSetting;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $page_setting = PageSetting::where('page_name', 'events')->first();

        return view('frontend.events', [
            'events' => Event::paginate(6),
            'pageSetting'=> $page_setting
        ]);
    }

    public function show($id)
    {
        $page_setting = PageSetting::where('page_name', 'events')->first();
        return view('frontend.events_details', [
            'event' => Event::findOrFail($id),
            'pageSetting'=> $page_setting
        ]);
    }
}
