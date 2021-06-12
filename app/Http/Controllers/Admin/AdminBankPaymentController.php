<?php

namespace App\Http\Controllers\Admin;

use ApiChef\PayHere\Payment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SuperAdminRequest;
use App\Models\Bank;
use App\Notifications\PaymentSuccessful;

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
        $payment->status = 1;
        $payment->save();
        $request->user()->notify(new PaymentSuccessful($payment));

        $bank->status = 1;
        $bank->save();

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
                    ->where('status', 1)
                    ->orderBy('id', 'DESC')
                    ->paginate(10),
            ]);
    }
}
