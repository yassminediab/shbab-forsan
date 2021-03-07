<?php

namespace App\Http\Controllers;

use App\CaseModel;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function index()
    {
        return view('frontend.donation', [
            'cases' => CaseModel::paginate(12)
        ]);
    }

    public function show($id)
    {
        return view('frontend.donation_details', [
            'case' => CaseModel::findOrFail($id),
            'cases' => CaseModel::latest()->limit(4)->get()
        ]);
    }
}
