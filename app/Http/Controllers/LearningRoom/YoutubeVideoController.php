<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningRoom\DocumentRequest;
use App\Http\Requests\LearningRoom\YoutubeVideoRequest;
use App\Models\Document;
use App\Models\Lesson;

class YoutubeVideoController extends Controller
{
    public function view(DocumentRequest $request, Lesson $lesson)
    {
        return view('learning-room.youtube-video')
            ->with([
                'lesson' => $lesson,
                'documents' => Document::query()
                    ->ofLesson($lesson)
                    ->where('youtube', "<>", null)
                    ->orderBy('id', 'DESC')
                    ->paginate(9),
            ]);
    }

    public function save(YoutubeVideoRequest $request, Lesson $lesson)
    {
        $document = new Document();
        $document->title = $request->get('title');
        $document->youtube = $request->get('youtube');
        $document->lesson_id = $lesson->id;
        $document->save();

        return redirect()->back()
            ->with('success', 'Link save successful');
    }
}
