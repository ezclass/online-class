<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeleteLessonControllerRequest;
use App\Models\Lesson;

class DeleteLessonController extends Controller
{
    public function __invoke(DeleteLessonControllerRequest $request, Lesson $lesson)
    {
        $lesson->delete();
        return redirect()
            ->back()
            ->with('success', 'Class Deleted Success');
    }
}
