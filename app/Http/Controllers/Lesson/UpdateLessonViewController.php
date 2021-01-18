<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateLessonViewRequest;
use App\Models\Lesson;

class UpdateLessonViewController extends Controller
{
    public function __invoke(UpdateLessonViewRequest $request, Lesson $lesson)
    {
        return view('lesson.updatelesson')
            ->with([
                'lesson' => $lesson
            ]);
    }
}
