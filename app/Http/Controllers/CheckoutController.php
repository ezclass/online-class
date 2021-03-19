<?php

namespace App\Http\Controllers;

use ApiChef\PayHere\Payment;
use ApiChef\PayHere\Subscription;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CheckoutController extends Controller
{
    public function show(Program $program, Request $request)
    {
        $duration = Carbon::now()->diffInMonths($program->end_date);

        $payment = Subscription::make(
            $program,
            $request->user(),
            '1 Month',
            "{$duration} Month",
            $program->fees
        );

        return view('payhere.checkout')
            ->with([
                'payment' => $payment,
                'program' => $program,
            ]);
    }

    public function success(Request $request)
    {
        $payment = Payment::findByOrderId($request->get('order_id'));

        return redirect()
            ->route('student.dashboard')
            ->with('success', 'Your payment was successful.');
    }

    public function cancelled(Request $request)
    {
        $payment = Payment::findByOrderId($request->get('order_id'));

        return redirect()
            ->route('student.dashboard')
            ->with('warning', 'The payment was not successful.');
    }
}
