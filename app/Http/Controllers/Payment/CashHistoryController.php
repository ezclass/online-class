<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Paid;
use Illuminate\Http\Request;

class CashHistoryController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('payment.cash-history')
            ->with([
                'paids' => Paid::query()
                    ->where('user_id', $request->user()->id)
                    ->paginate(10),
            ]);
    }
}
