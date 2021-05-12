<?php

namespace App\Http\Controllers\Admin;

use ApiChef\PayHere\Payment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;
use App\Models\Program;

class PayerDetailController extends Controller
{
    public function __invoke(AdminSuperAdminRequest $request, Program $program)
    {
        return view('admin.payer-detail')
            ->with([
                'program' => $program,
                'payments' => Payment::query()
                    ->with(['payer'])
                    ->where('payable_id', $program->id)
                    ->success()
                    ->orderBy('id', 'asc')
                    ->paginate(10),
            ]);
    }
}
