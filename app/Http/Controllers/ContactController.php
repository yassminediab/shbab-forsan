<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->except('_token'));
        
        return redirect('/contact')->with('success', 'sent Successfully');
    }
}
