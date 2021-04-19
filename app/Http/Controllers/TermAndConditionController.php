<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermAndConditionController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('pages.term-and-condition');
    }
}
