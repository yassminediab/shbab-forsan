<?php

namespace App\Http\Controllers;

use App\PageSetting;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $page_setting = PageSetting::where('page_name', 'contact')->first();

        return view('frontend.contact',['pageSetting'=> $page_setting]);
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->except('_token'));

        return redirect('/contact')->with('success', 'sent Successfully');
    }
}
