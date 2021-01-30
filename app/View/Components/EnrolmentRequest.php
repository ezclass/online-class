<?php

namespace App\View\Components;

use App\Models\Enrolment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class EnrolmentRequest extends Component
{
    public Collection $enrolments;

    public function __construct()
    {
        $this->enrolments = Enrolment::query()
            ->with(['student', 'program', 'program.grade', 'program.subject'])
            ->whereNull('accepted_at')
            ->whereHas('program', function (Builder $query) {
                $query->where('user_id', Auth::user()->id);
            })
            ->get();
    }

    public function render()
    {
        return view('components.enrolment-request');
    }
}
