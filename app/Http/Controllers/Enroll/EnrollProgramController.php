<?php

namespace App\Http\Controllers\Enroll;

use App\Http\Controllers\Controller;
use App\Models\Addition;
use App\Models\Program;

class EnrollProgramController extends Controller
{
    public function __invoke(Program $program)
    {
        return view('pages.enroll-program')
            ->with([
                'program' => $program,
                'additions' => Addition::query()
                    ->where('program_id', $program->id)
                    ->orderBy('id', 'ASC')
                    ->get(),
                'lessons' => $program->getLesson($program),

            ]);
    }
}
