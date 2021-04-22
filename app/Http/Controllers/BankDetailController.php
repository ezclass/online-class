<?php

namespace App\Http\Controllers;

use App\Http\Requests\BankDetailRequest;
use App\Models\BankDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BankDetailController extends Controller
{
    public function view(Request $request)
    {
        return view('payment.bank-detail');
    }

    public function save(BankDetailRequest $request, BankDetail $bankDetail)
    {
        $bankDetail->name = $request->get('name');
        $bankDetail->account_number = $request->get('account_number');
        $bankDetail->branch = $request->get('branch');
        $bankDetail->user_id = Auth::user()->id;
        $bankDetail->save();

        return redirect()->back()
            ->with('success', 'Account details saved');
    }
}
