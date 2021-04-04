<?php

namespace App\Http\Controllers\Admin;

use ApiChef\PayHere\Subscription;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaymentRequest;

class PaymentController extends Controller
{
    public function __invoke(PaymentRequest $request)
    {
        return view('admin.payment')
            ->with([
                'subscriptions' => Subscription::query()
                    ->where('validated',null)
                    ->get()
            ]);
    }
}
