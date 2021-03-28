<?php

namespace App\View\Components;

use App\Models\Program;
use Illuminate\View\Component;

class PaymentDetail extends Component
{
    public Program $program;

    public function __construct()
    {
        $this->program =  Program::query()
            ->with(['enrolments'])
            ->get();
    }

    public function render()
    {
        return view('components.payment-detail');
    }
}
