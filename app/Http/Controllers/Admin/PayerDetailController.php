<?php

namespace App\Http\Controllers\Admin;

use ApiChef\PayHere\Subscription;
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
                'subscriptions' => Subscription::query()
                    ->with(['payer'])
                    ->where('subscribable_id', $program->id)
                    ->where('status', 2)
                    ->orderBy('id', 'asc')
                    ->paginate(10),
            ]);
    }
}
