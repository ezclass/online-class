<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lesson\UpdateLessonRequest;
use App\Models\Lesson;

class UpdateLessonController extends Controller
{
    public function __invoke(UpdateLessonRequest $request, Lesson $lesson)
    {
        $lesson->name = $request->get('name');
        $lesson->date = $request->get('date');
        $lesson->time = $request->get('time');
        $lesson->note  = $request->get('note');
        $lesson->save();

        return redirect()
            ->back();
    }
}
