<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class FileViewController extends Controller
{
    public function __invoke(Request $request, Document $document)
    {
        return view('learning-room.document-view', compact('document'));
    }
}
