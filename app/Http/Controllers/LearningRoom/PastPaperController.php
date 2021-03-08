<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningRoom\PastPaperRequest;
use App\Models\Lesson;
class PastPaperController extends Controller
{
    public function __invoke(PastPaperRequest $request, Lesson $lesson)
    {
        return view('learning-room.pastpaper')
            ->with(['lesson' => $lesson]);
    }
}
