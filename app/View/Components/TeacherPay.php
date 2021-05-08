<?php

namespace App\View\Components;

use ApiChef\PayHere\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class TeacherPay extends Component
{
    public Collection $subscriptions;

    public function __construct()
    {
        $startDate = Carbon::now();
        $firstDay = $startDate->firstOfMonth();
        $lastDay = $startDate->lastOfMonth();

        return $this->subscriptions = Subscription::query()
            ->whereBetween('updated_at', [
                Carbon::createFromDate("$firstDay")->startOfMonth(),
                Carbon::createFromDate("$lastDay")->endOfMonth()
            ])
            ->where('status', 2)
            ->get();
    }

    public function render()
    {
        return view('components.teacher-pay');
    }
}
