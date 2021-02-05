<?php

namespace App\Http\Controllers;

use ApiChef\PayHere\Payment;
use App\Models\Program;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function show(Program $program, Request $request)
    {

        $payment = Payment::make($program, $request->user(), $program->fees);

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
            ->with('success', true);
    }

    public function cancelled(Request $request)
    {
        $payment = Payment::findByOrderId($request->get('order_id'));

        return redirect()
            ->route('student.dashboard')
            ->with('cancelled', true);
    }
}
