<?php

namespace App\Http\Controllers\Program;

use ApiChef\PayHere\Subscription;
use App\Http\Controllers\Controller;
use App\Http\Requests\Program\IncomeDetailRequest;
use App\Models\Program;

class IncomeDetailController extends Controller
{
    public function __invoke(IncomeDetailRequest $request, Program $program)
    {
        return view('program.income-detail')
            ->with([
                'program' => $program,
                'subscriptions' => Subscription::query()
                    ->where('subscribable_id', $program->id)
                    ->where('status', 2)
                    ->sum('amount'),
            ]);
    }
}
