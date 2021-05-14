<?php

namespace App\Http\Controllers;

use App\Http\Requests\ViewProgramRequest;
use App\Models\Program;

class ViewProgramController extends Controller
{
    public function __invoke(ViewProgramRequest $request, Program $program)
    {
        return view('program.program-view')
            ->with([
                'program' => $program,
                'lessons' => $program->getLesson($program),
            ]);
    }
}
