<?php

namespace App\Http\Controllers\Program;

use ApiChef\PayHere\Payment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Program\IncomeDetailRequest;
use App\Models\Program;
use Carbon\Carbon;

class IncomeDetailController extends Controller
{
    public function __invoke(IncomeDetailRequest $request, Program $program)
    {
        $startDate = Carbon::now();
        $firstDay = $startDate->firstOfMonth();
        $lastDay = $startDate->lastOfMonth();

        return view('program.income-detail')
            ->with([
                'program' => $program,
                'payments' => Payment::query()
                    ->where('payable_id', $program->id)
                    ->success()
                    ->whereBetween('updated_at', [
                        Carbon::createFromDate("$firstDay")->startOfMonth(),
                        Carbon::createFromDate("$lastDay")->endOfMonth()
                    ])
                    ->sum('amount'),
            ]);
    }
}
