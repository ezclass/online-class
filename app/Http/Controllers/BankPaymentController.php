<?php

namespace App\Http\Controllers;

use ApiChef\PayHere\Subscription;
use App\Http\Requests\BankPaymentRequest;
use App\Http\Requests\PaymentViewRequest;
use App\Models\Enrolment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

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
        $duration = Carbon::now()->diffInMonths($enrolment->program->end_date->format('M d,Y'));

        $subscription = Subscription::make(
            $enrolment->program,
            $request->user(),
            '1 Month',
            "{$duration} Month",
            $enrolment->program->fees
        );

        $subscription->store($request->get('invoice_no'), $request->get('invoice_date'));
        $this->storeFile($subscription, $request->file('receipt'));

        return redirect()
            ->route('student.dashboard')
            ->with('primary', 'Your payment will be checked');
    }

    private function storeFile(Subscription $subscription, UploadedFile $file = null)
    {
        if ($file != null) {
            $filename = $subscription->id . '.' . $file->getClientOriginalExtension();
            Storage::disk('do')->put('bank_payment/' . $filename, file_get_contents(request()->file('receipt')->getRealPath()), 'public');
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
