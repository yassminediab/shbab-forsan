<?php

namespace App\Http\Controllers;

use App\Http\Requests\VolunteerDataRequest;
use App\PageSetting;
use App\VolunteerData;

class VolunteerDataController extends Controller
{
    public function index()
    {
        $page_setting = PageSetting::where('page_name', 'volunteers')->first();
        return view('frontend.volunteer_data', [
            'pageSetting'=> $page_setting
        ]);
    }

    public function store(VolunteerDataRequest $request)
    {
        VolunteerData::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect('/volunteer-data')->with('success', 'sent Successfully');
    }
}
