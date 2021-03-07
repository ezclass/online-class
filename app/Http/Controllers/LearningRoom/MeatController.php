<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class MeatController extends Controller
{
    public function __invoke(Request $request, Lesson $lesson)
    {
        return view('learning-room.meat')
            ->with(['lesson' => $lesson]);
    }
}
