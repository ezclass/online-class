<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class AllTeacher extends Component
{
    public Collection $teachers;

    public function __construct()
    {
        $this->teachers = User::query()
            ->where('status', 1)
            ->role('teacher')
            ->where('phone_number_verified_at', "<>", null)
            ->where('email_verified_at', "<>", null)
            ->orderBy('id', 'DESC')
            ->get();
    }

    public function render()
    {
        return view('components.all-teacher');
    }
}
