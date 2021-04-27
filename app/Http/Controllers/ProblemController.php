<?php

namespace App\Http\Controllers;

use App\Event;
use App\PageSetting;
use App\Problem;
use Illuminate\Http\Request;

class ProblemController extends Controller
{

    public function show($id)
    {
        return view('frontend.problem_details', [
            'problem' => Problem::findOrFail($id),
        ]);
    }
}
