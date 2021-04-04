<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningRoom\FileUploadRequest;
use App\Models\Document;
use App\Models\Lesson;
use Illuminate\Http\UploadedFile;

class FileUploadController extends Controller
{
    public function __invoke(FileUploadRequest $request, Lesson $lesson)
    {
        $document = new Document();
        $document->title = $request->get('title');
        $document->lesson_id = $lesson->id;
        $document->save();
        $this->storeFile($document, $request->file('file'));

        return redirect()->back()
            ->with('success', 'File Upload Success');
    }

    private function storeFile(Document $document, UploadedFile $file = null)
    {
        if ($file != null) {
            $filename = $document->id . '.' . $file->getClientOriginalExtension();
            $file->move('storage/document/', $filename);
            $document->file = $filename;
            $document->save();
        }
    }
}
