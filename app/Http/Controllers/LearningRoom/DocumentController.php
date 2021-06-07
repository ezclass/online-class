<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningRoom\DocumentRequest;
use App\Models\Document;
use App\Models\Lesson;

class DocumentController extends Controller
{
    public function __invoke(DocumentRequest $request, Lesson $lesson)
    {
        return view('learning-room.document')
            ->with([
                'lesson' => $lesson,
                'documents' => Document::query()
                    ->ofLesson($lesson)
                    ->where('file', "<>", null)
                    ->orderBy('id', 'DESC')
                    ->paginate(10),
            ]);
    }
}
