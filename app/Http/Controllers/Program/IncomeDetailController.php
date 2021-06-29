<?php

namespace App\Http\Controllers\Program;

use ApiChef\PayHere\Payment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Program\IncomeDetailRequest;
use App\Models\Program;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

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
                    ->whereBetween('updated_at', [
                        Carbon::createFromDate("$firstDay")->startOfMonth(),
                        Carbon::createFromDate("$lastDay")->endOfMonth()
                    ])
                    ->where('payable_id', $program->id)
                    ->whereHas('payer', function (Builder $query) use ($program) {
                        $query->where('reference', $program->teacher->getRouteKey());
                    })
                    ->success()
                    ->get(),

                'homepayments' => Payment::query()
                    ->whereBetween('updated_at', [
                        Carbon::createFromDate("$firstDay")->startOfMonth(),
                        Carbon::createFromDate("$lastDay")->endOfMonth()
                    ])
                    ->where('payable_id', $program->id)
                    ->whereHas('payer', function (Builder $query) use ($program) {
                        $query->where('reference', "<>", $program->teacher->getRouteKey());
                    })
                    ->success()
                    ->get()
            ]);
    }
}
