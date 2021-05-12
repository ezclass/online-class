<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaidRequest;
use App\Models\Paid;

class PaidController extends Controller
{
    public function save(PaidRequest $request, Paid $paid)
    {
        $paid->amount = $request->get('amount');
        $paid->summary = $request->get('summary');
        $paid->user_id = $request->get('user_id');
        $paid->save();

        return redirect()->back()
            ->with('success', 'paid successfully');
    }
}
