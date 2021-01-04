<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Program;


class UpdateClassViewController extends Controller
{
    public function __invoke(Program $program)
    {
        return view('teacher.updateclass')
            ->with(['program' => $program]);
    }
}
