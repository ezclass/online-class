<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningRoom\DocumentRequest;
use App\Http\Requests\LearningRoom\YoutubeVideoRequest;
use App\Models\Document;
use App\Models\Lesson;

class CloudDocumentController extends Controller
{
    public function view(DocumentRequest $request, Lesson $lesson)
    {
        return view('learning-room.cloud-document')
            ->with([
                'lesson' => $lesson,
                'documents' => Document::query()
                    ->ofLesson($lesson)
                    ->where('cloud', "<>", null)
                    ->orderBy('id', 'DESC')
                    ->paginate(10),
            ]);
    }

    public function save(YoutubeVideoRequest $request, Lesson $lesson)
    {
        $document = new Document();
        $document->title = $request->get('title');
        $document->cloud = $request->get('link');
        $document->lesson_id = $lesson->id;
        $document->save();

        return redirect()->back()
            ->with('success', 'Link save successful');
    }
}
