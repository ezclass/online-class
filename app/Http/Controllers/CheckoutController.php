<?php

namespace App\Http\Controllers;

use ApiChef\PayHere\Subscription;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CheckoutController extends Controller
{
    public function show(Program $program, Request $request)
    {
        $duration = Carbon::now()->diffInMonths($program->end_date);

        $subscription = Subscription::make(
            $program,
            $request->user(),
            '1 Month',
            "{$duration} Month",
            $program->fees
        );

        return view('payhere.checkout')
            ->with([
                'payment' => $subscription,
                'program' => $program,
            ]);
    }

    public function success(Request $request)
    {
        $subscription = Subscription::findByOrderId($request->get('order_id'));

        return redirect()
            ->route('student.dashboard')
            ->with('success', 'Your payment was successful.');
    }

    public function cancelled(Request $request)
    {
        $subscription = Subscription::findByOrderId($request->get('order_id'));

        return redirect()
            ->route('student.dashboard')
            ->with('warning', 'The payment was not successful.');
    }
}
