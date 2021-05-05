<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileDownloadController extends Controller
{
    public function __invoke(Request $request, Document $document)
    {
        return Storage::download('document/' . $document->file);
    }
}
