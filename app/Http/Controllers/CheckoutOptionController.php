<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class CheckoutOptionController extends Controller
{
    public function __invoke(Request $request, Program $program)
    {
        return view('payhere.chechout-option')
            ->with(['program' => $program]);
    }
}
