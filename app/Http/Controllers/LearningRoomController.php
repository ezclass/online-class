<?php

namespace App\Http\Controllers;

use App\Http\Requests\LearningRoom\LearningRoomViewRequest;
use App\Models\Lesson;

class LearningRoomController extends Controller
{
    public function __invoke(LearningRoomViewRequest $request, Lesson $lesson)
    {
        return view('program.learning-room')
            ->with(['program', 'program.teacher', 'program.subject'])
            ->with(['lesson' => $lesson]);
    }
}
