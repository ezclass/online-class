<?php

namespace App\Http\Controllers;

use App\Models\Enrolment;
use Illuminate\Http\Request;

class CheckoutOptionController extends Controller
{
    public function __invoke(Request $request, Enrolment $enrolment)
    {
        return view('payhere.chechout-option')
            ->with(['enrolment' => $enrolment]);
    }
}
