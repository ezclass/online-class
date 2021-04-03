<?php

namespace App\Http\Controllers;

use ApiChef\PayHere\Subscription;
use App\Http\Requests\PaymentViewRequest;
use App\Models\Enrolment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CheckoutController extends Controller
{
    public function show(Enrolment $enrolment, PaymentViewRequest $request)
    {
        if ($enrolment->payment_policy == 50) {
            $fees = $enrolment->program->fees / 2;
        } else {
            $fees = $enrolment->program->fees;
        }

        $duration = Carbon::now()->diffInDays($enrolment->program->end_date->format('M d,Y'));

        $subscription = Subscription::make(
            $enrolment->program,
            $request->user(),
            '1 Month',
            "{$duration} Day",
            $fees
        );

        return view('payhere.checkout')
            ->with([
                'payment' => $subscription,
                'program' => $enrolment->program,
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
