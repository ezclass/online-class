<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningRoom\DownloadAccessRequest;
use App\Models\Document;

class DownloadAccessController extends Controller
{
    public function active(DownloadAccessRequest $request, Document $document)
    {
        $document->download = true;
        $document->save();

        return redirect()
            ->back()
            ->with('success', 'Download access is active');
    }

    public function inactive(DownloadAccessRequest $request, Document $document)
    {
        $document->download = false;
        $document->save();

        return redirect()
            ->back()
            ->with('primary', 'Download access is inactive');
    }
}
