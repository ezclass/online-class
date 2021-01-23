<?php

namespace App\View\Components;

use App\Models\Enrolment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class EnrolmentRequest extends Component
{
    public Collection $enrolments;

    public function __construct()
    {
        $this->enrolments = Enrolment::query()->get()->load('student', 'program','program.grade','program.subject');
    }

    public function render()
    {
        return view('components.enrolment-request');
    }
}
