<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningRoom\FileUploadRequest;
use App\Models\Lesson;

class FileUploadController extends Controller
{
    public function __invoke(FileUploadRequest $request, Lesson $lesson)
    {
        dd($request);
    }
}
