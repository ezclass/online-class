<?php

namespace App\Http\Controllers\Admin;

use ApiChef\PayHere\Payment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SuperAdminRequest;
use App\Models\Bank;
use App\Notifications\PaymentSuccessful;
use App\Notifications\PaymentSuccessTeacher;

class AdminBankPaymentController extends Controller
{
    public function pending(SuperAdminRequest $request)
    {
        return view('admin.pending-bank-payment')
            ->with([
                'banks' => Bank::query()
                    ->with(['payment.payer', 'payment.payable'])
                    ->where('status', 0)
                    ->orderBy('id', 'ASC')
                    ->paginate(10),
            ]);
    }

    public function approve(SuperAdminRequest $request, Bank $bank)
    {
        $payment = Payment::findByOrderId($bank->payment->getRouteKey());
        $payment->payment_id = $bank->payment->getRouteKey();
        $payment->status = 2;
        $payment->validated = 1;
        $payment->save();

        $bank->status = 2;
        $bank->save();

        $payment->payer->notify(new PaymentSuccessful($payment));
        $payment->payable->teacher->notify(new PaymentSuccessTeacher($payment));

        return redirect()
            ->back()
            ->with('success', 'Payment approved successfully');
    }

    public function delete(SuperAdminRequest $request, Bank $bank)
    {
        $bank->payment->delete();

        return redirect()
            ->back()
            ->with('success', 'Payment successfully deleted');
    }

    public function successPayment(SuperAdminRequest $request)
    {
        return view('admin.success-bank-payment')
            ->with([
                'banks' => Bank::query()
                    ->with(['payment.payer', 'payment.payable'])
                    ->where('status', 2)
                    ->orderBy('id', 'DESC')
                    ->paginate(10),
            ]);
    }
}
