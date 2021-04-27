<?php

namespace App\Http\Controllers;

use App\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function store(Request $request)
    {
        NewsLetter::create([
            'email' => $request->email,
        ]);

        return back()->with('success', 'sent Successfully');
    }
}
