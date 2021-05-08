<?php

namespace App\Http\Controllers;

use App\Http\Requests\BankDetailDeleteRequest;
use App\Http\Requests\BankDetailRequest;
use App\Models\User;
use Illuminate\Http\Request;

class BankDetailController extends Controller
{
    public function view(Request $request)
    {
        return view('payment.bank-detail');
    }

    public function save(BankDetailRequest $request, User $user)
    {
        $user->account_name = $request->get('account_name');
        $user->account_number = $request->get('account_number');
        $user->bank_name = $request->get('bank_name');
        $user->branch = $request->get('branch');
        $user->save();

        return redirect()->back()
            ->with('success', 'Bank account details saved');
    }

    public function delete(BankDetailDeleteRequest $request, User $user)
    {
        $user->account_name = null;
        $user->account_number = null;
        $user->bank_name = null;
        $user->branch = null;
        $user->save();

        return redirect()->back()
            ->with('success', 'Bank account details were deleted');
    }
}
