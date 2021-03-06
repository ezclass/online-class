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
        $lesson->starts_at = $request->get('starts_at');
        $lesson->ends_at = $request->get('ends_at');
        $lesson->note  = $request->get('note');
        $lesson->save();

        return redirect()
            ->route('program.view', $lesson->program)
            ->with('success','Lesson update successful');
    }
}
