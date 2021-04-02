<?php

namespace App\Http\Controllers;

use ApiChef\PayHere\Subscription;
use App\Http\Requests\BankPaymentRequest;
use App\Http\Requests\BankPaymentViewRequest;
use App\Models\Enrolment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class BankPaymentController extends Controller
{
    public function show(BankPaymentViewRequest $request, Enrolment $enrolment)
    {
        return view('payhere.bank-payment')
            ->with([
                'enrolment' => $enrolment,
            ]);
    }

    public function store(Enrolment $enrolment, BankPaymentRequest $request)
    {
        $duration = Carbon::now()->diffInDays($enrolment->program->end_date->format('M d,Y'));

        $subscription = Subscription::make(
            $enrolment->program,
            $request->user(),
            '1 Month',
            "{$duration} Day",
            $enrolment->program->fees
        );

        $subscription->invoice_no = $request->get('invoice_no');
        $subscription->invoice_date = $request->get('invoice_date');
        $subscription->save();
        $this->storeFile($subscription, $request->file('receipt'));

        return redirect()
            ->route('student.dashboard')
            ->with('wait', 'Your payment will be checked');
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
            $subscription->status = 1;
            $subscription->times_paid = 1;
            $subscription->validated = true;
            $subscription->save();

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
