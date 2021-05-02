<?php

namespace App\Http\Controllers\Program;

use ApiChef\PayHere\Subscription;
use App\Http\Controllers\Controller;
use App\Http\Requests\Program\IncomeDetailRequest;
use App\Models\Program;
use Carbon\Carbon;

class IncomeDetailController extends Controller
{
    public function __invoke(IncomeDetailRequest $request, Program $program)
    {
        return view('program.income-detail')
            ->with([
                'program' => $program,
                'subscriptions' => Subscription::query()
                    ->where('subscribable_id', $program->id)
                    ->success()
                    ->sum('amount'),
                'month' => Carbon::now()->format('M/Y')
            ]);
    }
}
