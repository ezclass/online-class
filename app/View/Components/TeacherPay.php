<?php

namespace App\View\Components;

use ApiChef\PayHere\Subscription;
use Illuminate\View\Component;

class TeacherPay extends Component
{
    public Subscription $subscription;

    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }

    public function render()
    {
        return view('components.teacher-pay');
    }
}
