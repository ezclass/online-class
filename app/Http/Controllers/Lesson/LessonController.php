<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Program;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function __invoke(Request $request, Program $program)
    {
        $lesson = Lesson::query()
            ->where('program_id', $program->id)
            ->get();

        return view('lesson.lesson')
            ->with([
                'program' => $program,
                'lesson' => $lesson
            ]);
    }
}
