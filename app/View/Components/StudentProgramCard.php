<?php

namespace App\View\Components;

use App\Models\Enrolment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class StudentProgramCard extends Component
{
    public Collection $enrolments;

    public function __construct()
    {
        $this->enrolments =  Enrolment::query()
            ->where('user_id', Auth::user()->id)
            ->with([
                'student',
                'program.teacher',
                'program.subject',
                'program.grade',
                'program.language'
            ])
            ->orderBy('id', 'DESC')
            ->get();
    }

    public function render()
    {
        return view('components.student-program-card');
    }
}
