<?php

namespace App\Http\Controllers;

use App\AboutUs ;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();

        return view('frontend.about', [
            'aboutUs' => $aboutUs
        ]);
    }
}
