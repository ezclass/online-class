<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lesson\LessonRequest;
use App\Models\Lesson;
use App\Models\Program;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function __invoke(LessonRequest $request, Program $program)
    {
        $lesson = Lesson::query()
            ->with(['program'])
            ->where('program_id', $program->id)
            ->get();

        return view('lesson.lesson')

            ->with([
                'program' => $program,
                'lesson' => $lesson
            ]);
    }
}
