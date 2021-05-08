<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class TeacherPay extends Component
{
    public Collection $teachers;

    public function __construct()
    {
        return $this->teachers = User::query()
            ->where('status', 1)
            ->role('teacher')
            ->get();
    }

    public function render()
    {
        return view('components.teacher-pay');
    }
}
