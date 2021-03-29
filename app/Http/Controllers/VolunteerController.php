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
        $imageName = time().'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path('images'), $imageName);
        $request['image'] = $imageName;

        Volunteer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'message' => $request->message,
            'image' => $imageName,
        ]);

        return redirect('/volunteer')->with('success', 'sent Successfully');
    }
}
