<?php

namespace App\Http\Controllers;

use App\Http\Requests\ViewProgramRequest;
use App\Models\Lesson;
use App\Models\Program;

class ViewProgramController extends Controller
{
    public function __invoke(ViewProgramRequest $request, Program $program)
    {
        $program->hasEnrolled($request->user());

        return view('program.program-view')
            ->with([
                'program' => $program,
                'lessons' => Lesson::query()
                    ->with('program')
                    ->ofProgram($program)
                    ->get()
            ]);
    }
}
