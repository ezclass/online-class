<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('lesson.lesson');
    }
}
