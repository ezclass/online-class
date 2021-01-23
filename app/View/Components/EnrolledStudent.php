<?php

namespace App\View\Components;

use App\Models\Enrolment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class EnrolledStudent extends Component
{
    public Collection $enrolments;

    public function __construct()
    {
        $this->enrolments = Enrolment::query()->with(['student', 'program','program.grade','program.subject'])->get();
    }

    public function render()
    {
        return view('components.enrolled-student');
    }
}
