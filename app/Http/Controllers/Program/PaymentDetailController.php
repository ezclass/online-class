<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use App\Http\Requests\Program\PaymentDetailRequest;
use App\Models\Program;

class PaymentDetailController extends Controller
{
    public function __invoke(PaymentDetailRequest $request, Program $program)
    {
        return view('program.payment-detail')
            ->with('enrolments')
            ->with([
                'programs' => $program
            ]);
    }
}
