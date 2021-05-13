<?php

namespace App\Http\Controllers;

use ApiChef\PayHere\Payment;
use App\Http\Requests\PaymentViewRequest;
use App\Models\Enrolment;
use App\Notifications\PaymentSuccessful;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function show(Enrolment $enrolment, PaymentViewRequest $request)
    {
        $payment = Payment::make(
            $enrolment->program,
            $request->user(),
            $enrolment->program->fees
        );

        return view('payhere.checkout')
            ->with([
                'payment' => $payment,
                'program' => $enrolment->program,
            ]);
    }

    public function success(Request $request)
    {
        $payment = Payment::findByOrderId($request->get('order_id'));
        $payment->payment_id = $request->get('order_id');
        $payment->status = 2;
        $payment->save();
        $request->user()->notify(new PaymentSuccessful());

        return redirect()
            ->route('student.dashboard')
            ->with('success', 'Your payment was successful.');
    }

    public function cancelled(Request $request)
    {
        $payment = Payment::findByOrderId($request->get('order_id'));
        $payment->delete();

        return redirect()
            ->route('student.dashboard')
            ->with('warning', 'The payment was not successful.');
    }
}
