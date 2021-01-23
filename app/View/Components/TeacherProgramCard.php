<?php

namespace App\View\Components;

use App\Models\Program;
use Illuminate\View\Component;

class TeacherProgramCard extends Component
{
    public Program $program;

    public function __construct(Program $program)
    {
        $this->program = $program;
    }

    public function render()
    {
        return view('components.teacher-program-card');
    }
}
