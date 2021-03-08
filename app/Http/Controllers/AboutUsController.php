<?php

namespace App\Http\Controllers;

use App\AboutUs ;
use App\PageSetting;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();
        $page_setting = PageSetting::where('page_name', 'aboutUs')->first();

        return view('frontend.about', [
            'aboutUs' => $aboutUs,
            'pageSetting' => $page_setting
        ]);
    }
}
