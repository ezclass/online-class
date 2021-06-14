<?php

namespace App\Http\Controllers\Admin;

use ApiChef\PayHere\Payment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SuperAdminRequest;

class AdminOnlinePaymentController extends Controller
{
    public function success(SuperAdminRequest $request)
    {
        return view('admin.success-online-payment')
            ->with([
                'payments' => Payment::query()
                    ->with(['payer', 'payable'])
                    ->success()
                    ->where('validated')
                    ->orderBy('id', 'DESC')
                    ->paginate(10),
            ]);
    }

    public function cancel(SuperAdminRequest $request)
    {
        return view('admin.cancel-online-payment')
            ->with([
                'payments' => Payment::query()
                    ->with(['payer', 'payable'])
                    ->where('status', 0)
                    ->orderBy('id', 'DESC')
                    ->paginate(10),
            ]);
    }

    public function delete(SuperAdminRequest $request, Payment $payment)
    {
        $payment->delete();

        return redirect()
            ->back()
            ->with('success', 'Payment successfully deleted');
    }
}
