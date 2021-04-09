<?php

namespace App\Http\Controllers;

use ApiChef\PayHere\Subscription;
use App\Http\Requests\BankPaymentRequest;
use App\Http\Requests\PaymentViewRequest;
use App\Models\Enrolment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class BankPaymentController extends Controller
{
    public function show(PaymentViewRequest $request, Enrolment $enrolment)
    {
        return view('payhere.bank-payment')
            ->with([
                'enrolment' => $enrolment,
            ]);
    }

    public function store(Enrolment $enrolment, BankPaymentRequest $request)
    {
        if ($enrolment->payment_policy == 50) {
            $fees = $enrolment->program->fees / 2;
            $offer = $enrolment->payment_policy;
        } else {
            $fees = $enrolment->program->fees;
            $offer = null;
        }

        $duration = Carbon::now()->diffInMonths($enrolment->program->end_date->format('M d,Y'));

        $subscription = Subscription::make(
            $enrolment->program,
            $request->user(),
            '1 Month',
            "{$duration} Month",
            $fees
        );

        $subscription->store($request->get('invoice_no'), $request->get('invoice_date'), $offer);
        $this->storeFile($subscription, $request->file('receipt'));

        return redirect()
            ->route('student.dashboard')
            ->with('primary', 'Your payment will be checked');
    }

    private function storeFile(Subscription $subscription, UploadedFile $file = null)
    {
        if ($file != null) {
            $filename = $subscription->id . '.' . $file->getClientOriginalExtension();
            $file->move('storage/payment_receipt/', $filename);
            $subscription->receipt = $filename;
            $subscription->save();
        }
    }

    public function success(Request $request, Subscription $subscription)
    {
        if ($request->get('action') == 1) {
            $subscription->successPayment();

            return redirect()
                ->route('admin.payment')
                ->with('success', 'Payment verification successful');
        } else {
            $subscription->delete();

            return redirect()
                ->route('admin.payment')
                ->with('warning', 'The data field has been deleted');
        }
    }
}
