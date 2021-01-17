<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateLessonControllerRequest;
use App\Models\Lesson;
use App\Models\Program;

class UpdateLessonController extends Controller
{
    public function __invoke(UpdateLessonControllerRequest $request, Lesson $lesson, Program $program)
    {
        $lesson->name = $request->get('name');
        $lesson->date = $request->get('date');
        $lesson->time = $request->get('time');
        $lesson->note  = $request->get('note');
        $lesson->save();

        return redirect()
        ->back()
        ->with('success', 'lesson update success');
    }
}
