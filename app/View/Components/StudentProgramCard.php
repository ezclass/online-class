<?php

namespace App\View\Components;

use App\Models\Enrolment;
use Illuminate\View\Component;

class StudentProgramCard extends Component
{
    public Enrolment $enrolment;

    public function __construct(Enrolment $enrolment)
    {
        $this->enrolment = $enrolment;
    }

    public function render()
    {
        return view('components.student-program-card');
    }
}
