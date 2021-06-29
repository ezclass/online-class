<?php

namespace App\View\Components;

use ApiChef\PayHere\Payment;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class BankIncome extends Component
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
            ->where('validated', 1)
            ->success()
            ->get();
    }

    public function render()
    {
        return view('components.bank-income');
    }
}
