<?php

namespace App\View\Components;

use ApiChef\PayHere\Payment;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class AllIncome extends Component
{
    public Collection $payments;

    public function __construct()
    {
        $startDate = Carbon::now();
        $firstDay = $startDate->firstOfMonth();
        $lastDay = $startDate->lastOfMonth();

        $this->payments = Payment::query()
            ->whereBetween('updated_at', [
                Carbon::createFromDate("$firstDay")->startOfMonth(),
                Carbon::createFromDate("$lastDay")->endOfMonth()
            ])
            ->success()
            ->get();
    }

    public function render()
    {
        return view('components.all-income');
    }
}
