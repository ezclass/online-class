<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningRoom\MeetRequest;
use App\Models\Lesson;
class MeatController extends Controller
{
    public function __invoke(MeetRequest $request, Lesson $lesson)
    {
        return view('learning-room.meat')
            ->with(['lesson' => $lesson]);
    }
}
