<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use App\Http\Requests\Program\StudentDetailRequest;
use App\Models\Program;

class StudentDetailController extends Controller
{
    public function __invoke(StudentDetailRequest $request, Program $program)
    {
        return view('program.student-detail')
           ->with([
                'program' => $program,
                'enrolments' => $program->getStudent($program),
            ]);
    }
}
