<?php

namespace App\Http\Controllers;

use App\Http\Requests\BankDetailDeleteRequest;
use App\Http\Requests\BankDetailRequest;
use App\Models\BankDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BankDetailController extends Controller
{
    public function view(Request $request)
    {
        return view('payment.bank-detail')
            ->with([
                'bankDetails' => BankDetail::query()
                    ->where('user_id', Auth::user()->id)
                    ->get(),
            ]);
    }

    public function save(BankDetailRequest $request)
    {
        $bankDetail = new BankDetail();
        $bankDetail->name = $request->get('name');
        $bankDetail->account_number = $request->get('account_number');
        $bankDetail->bank_name = $request->get('bank_name');
        $bankDetail->branch = $request->get('branch');
        $bankDetail->user_id = Auth::user()->id;
        $bankDetail->save();

        return redirect()->back()
            ->with('success', 'Account details saved');
    }

    public function delete(BankDetailDeleteRequest $request, BankDetail $bankDetail)
    {
        $bankDetail->delete();

        return redirect()->back()
            ->with('success', 'Bank details were deleted');
    }
}
