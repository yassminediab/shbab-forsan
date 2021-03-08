<?php

namespace App\Http\Controllers;

use App\PageSetting;
use App\VolunteerSection;
use Illuminate\Http\Request;
use App\Http\Requests\VolunteerRequest;
use App\Volunteer;

class VolunteerController extends Controller
{
    public function index()
    {
        $volunteerSection = VolunteerSection::first();
        $page_setting = PageSetting::where('page_name', 'volunteers')->first();

        return view('frontend.volunteer', [
             'VolunteerSection' => $volunteerSection,
            'pageSetting'=> $page_setting
        ]);
    }

    public function store(VolunteerRequest $request)
    {
        Volunteer::create($request->except('_token'));

        return redirect('/volunteer')->with('success', 'sent Successfully');
    }
}
