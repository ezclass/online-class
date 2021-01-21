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
        $class->date = $request->get('date');
        $class->time = $request->get('time');
        $class->note  = $request->get('note');
        $class->program_id  = $program->id;
        $class->save();

        return redirect()
            ->back()
            ->with('success', 'Lesson created success');
    }
}
