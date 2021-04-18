<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningRoom\FileDeleteRequest;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;

class FileDeleteController extends Controller
{
    public function __invoke(FileDeleteRequest $request, Document $document)
    {
        Storage::disk('do')->delete('document/' . $document->file);
        $document->delete();

        return redirect()
            ->back()
            ->with('success', 'File deleted successful');
    }
}
