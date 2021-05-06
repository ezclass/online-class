<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lesson\CreateLessonRequest;
use App\Models\Lesson;
use App\Models\Program;

class CreateLessonController extends Controller
{
    public function __invoke(CreateLessonRequest $request, Program $program)
    {
        $class = new Lesson();
        $class->name = $request->get('name');
        $class->class_date = $request->get('class_date');
        $class->description  = $request->get('description');
        $class->program_id  = $program->id;
        $class->save();

        return redirect()
            ->back()
            ->with('success', 'lesson created successful');
    }
}
