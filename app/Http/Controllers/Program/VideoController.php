<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use App\Http\Requests\Program\VideoDeleteRequest;
use App\Http\Requests\Program\VideoRequest;
use App\Models\Program;

class VideoController extends Controller
{
    public function save(VideoRequest $request, Program $program)
    {
        $program->video = $request->get('video');
        $program->save();

        return redirect()
            ->back()
            ->with('success', 'The link was saved successfully');
    }

    public function delete(VideoDeleteRequest $request, Program $program)
    {
        $program->video = null;
        $program->save();

        return redirect()
            ->back()
            ->with('success', 'The link was successfully deleted');
    }
}
