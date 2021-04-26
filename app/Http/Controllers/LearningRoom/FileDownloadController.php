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
        $file = Storage::disk('do')->get('document/' . $document->file);
        $headers = array(
            'Content-Type' => 'application/pdf',
        );

        return response($file, 200, $headers);
    }
}