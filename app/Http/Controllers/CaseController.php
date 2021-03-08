<?php

namespace App\Http\Controllers;

use App\CaseModel;
use App\PageSetting;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function index()
    {
        $page_setting = PageSetting::where('page_name', 'cases')->first();
        return view('frontend.donation', [
            'cases' => CaseModel::paginate(12),
            'pageSetting' => $page_setting
        ]);
    }

    public function show($id)
    {
        $page_setting = PageSetting::where('page_name', 'cases')->first();
        return view('frontend.donation_details', [
            'case' => CaseModel::findOrFail($id),
            'cases' => CaseModel::latest()->limit(4)->get(),
            'pageSetting' => $page_setting
        ]);
    }
}
