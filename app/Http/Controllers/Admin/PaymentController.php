<?php

namespace App\Http\Controllers\Admin;

use ApiChef\PayHere\Subscription;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.payment')
            ->with([
                'subscriptions' => Subscription::query()
                    ->where('validated',null)
                    ->get()
            ]);
    }
}
