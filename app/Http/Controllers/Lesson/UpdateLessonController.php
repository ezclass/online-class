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
        $lesson->class_date = $request->get('class_date');
        $lesson->description  = $request->get('description');
        $lesson->save();

        return redirect()
            ->route('program.view', $lesson->program)
            ->with('success','Lesson update successful');
    }
}
