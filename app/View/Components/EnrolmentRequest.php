<?php

namespace App\View\Components;

use App\Models\Enrolment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class EnrolmentRequest extends Component
{
    public Collection $enrolments;

    public function __construct()
    {
        $this->enrolments = Enrolment::query()
            ->pending()
            ->ofTeacher(Auth::user())
            ->with(['student', 'program', 'program.grade', 'program.subject'])
            ->orderBy('id', 'ASC')
            ->get();
    }

    public function render()
    {
        return view('components.enrolment-request');
    }
}
