<?php

namespace App\Http\Controllers;

use App\Http\Requests\BankPaymentRequest;
use App\Http\Requests\BankPaymentViewRequest;
use App\Models\BankPayment;
use App\Models\Enrolment;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

class BankPaymentController extends Controller
{
    public function show(BankPaymentViewRequest $request, Enrolment $enrolment)
    {
        return view('payhere.bank-payment')
            ->with([
                'enrolment' => $enrolment,
            ]);
    }

    public function success(BankPaymentRequest $request, Enrolment $enrolment)
    {
        $bankPayment = new BankPayment();
        $bankPayment->invoice_no = $request->get('invoice_no');
        $bankPayment->invoice_date = $request->get('invoice_date');
        $bankPayment->amount = $request->get('amount');
        $bankPayment->user_id = Auth::user()->id;
        $bankPayment->program_id = $enrolment->program->id;
        $bankPayment->save();
        $this->storeFile($bankPayment, $request->file('receipt'));

        return redirect()
            ->route('student.dashboard')
            ->with('wait', 'Your payment will be checked');
    }

    private function storeFile(BankPayment $bankPayment, UploadedFile $file = null)
    {
        if ($file != null) {
            $filename = $bankPayment->id . '.' . $file->getClientOriginalExtension();
            $file->move('storage/payment_receipt/', $filename);
            $bankPayment->receipt = $filename;
            $bankPayment->save();
        }
    }
}
