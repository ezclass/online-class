<?php

namespace App\Http\Controllers;

use ApiChef\Obfuscate\Support\Facades\Obfuscate;
use ApiChef\PayHere\Subscription;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CheckoutController extends Controller
{
    public function show(Program $program, Request $request)
    {
        $duration = Carbon::create($program->start_date)->diffInDays($program->end_date);

        $subscription = Subscription::make(
            $program,
            $request->user(),
            '1 Month',
            "{$duration} Day",
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
        $subscription->payment_id = $request->get('order_id');
        $subscription->status = 1;
        $subscription->times_paid = 1;
        $subscription->validated = true;
        $subscription->save();

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
