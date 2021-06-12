<?php

namespace App\Http\Controllers\Payment;

use ApiChef\PayHere\Payment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\BankPaymentRequest;
use App\Http\Requests\PaymentViewRequest;
use App\Models\Bank;
use App\Models\Enrolment;
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

    public function save(BankPaymentRequest $request, Enrolment $enrolment)
    {
        $payment = Payment::make(
            $enrolment->program,
            $request->user(),
            $enrolment->program->fees
        );

        $bank = new Bank();
        $bank->address = $request->get('address');
        $bank->city = $request->get('city');
        $bank->paid_date = $request->get('paid_date');
        $bank->receipt = $request->get('receipt');
        $bank->payment_id = $payment->id;
        $bank->save();
        $this->storeFile($bank, $request->file('receipt'));

        return redirect()
            ->route('student.dashboard')
            ->with('success', 'We have received information about your payments. Please note that it may take a maximum of 12 hours for admins to confirm your payment.');
    }

    private function storeFile(Bank $bank, UploadedFile $file = null)
    {
        if ($file != null) {
            $filename = $bank->getRouteKey() . '.' . $file->getClientOriginalExtension();
            Storage::disk('do')->put('receipt/' . $filename, file_get_contents(request()->file('receipt')->getRealPath()), 'public');
            $bank->receipt = $filename;
            $bank->save();
        }
    }
}
