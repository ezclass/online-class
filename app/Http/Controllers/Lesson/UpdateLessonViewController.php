<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateLessonViewControllerRequest;
use App\Models\Lesson;
use App\Models\Program;

class UpdateLessonViewController extends Controller
{
    public function __invoke(UpdateLessonViewControllerRequest $request, Lesson $lesson, Program $program)
    {
        return view('lesson.updatelesson')
            ->with([
                'lesson' => $lesson,
                'program' => $program
            ]);
    }
}
