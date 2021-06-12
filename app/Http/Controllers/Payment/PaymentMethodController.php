<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentViewRequest;
use App\Models\Enrolment;

class PaymentMethodController extends Controller
{
    public function __invoke(PaymentViewRequest $request, Enrolment $enrolment)
    {
        return view('payment.payment-method')
            ->with([
                'enrolment' => $enrolment,
            ]);
    }
}
