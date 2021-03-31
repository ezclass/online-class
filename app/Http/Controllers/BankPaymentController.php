<?php

namespace App\Http\Controllers;

use App\Http\Requests\BankPaymentRequest;
use App\Models\Program;
use Illuminate\Http\Request;

class BankPaymentController extends Controller
{
    public function show(Request $request, Program $program)
    {
        return view('payhere.bank-payment')
            ->with(['program' => $program]);
    }

    public function success(BankPaymentRequest $request, Program $program)
    {
        dd($request);
    }
}
