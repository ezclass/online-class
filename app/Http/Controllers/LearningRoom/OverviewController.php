<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningRoom\LearningRoomViewRequest;
use App\Models\Enrolment;
use App\Models\Lesson;

class OverviewController extends Controller
{
    public function __invoke(LearningRoomViewRequest $request, Lesson $lesson)
    {
        return view('learning-room.overview')
            ->with(['program', 'program.teacher', 'program.subject'])
            ->with([
                'lesson' => $lesson,
                'enrolments' => Enrolment::query()
                    ->with(['student'])
                    ->students($lesson->program)
                    ->enroled()
                    ->get(),
            ]);
    }
}
