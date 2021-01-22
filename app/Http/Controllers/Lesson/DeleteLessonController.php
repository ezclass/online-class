<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lesson\DeleteLessonRequest;
use App\Models\Lesson;

class DeleteLessonController extends Controller
{
    public function __invoke(DeleteLessonRequest $request, Lesson $lesson)
    {
        $lesson->delete();
        return redirect()
            ->back();
    }
}
