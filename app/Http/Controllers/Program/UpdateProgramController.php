<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use App\Http\Requests\Program\UpdateProgramRequest;
use App\Models\Program;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UpdateProgramController extends Controller
{
    public function __invoke(UpdateProgramRequest $request, Program $program)
    {
        $program->grade_id = $request->get('grade_id');
        $program->fees = $request->get('fees');
        $program->subject_id = $request->get('subject_id');
        $program->language_id = $request->get('language_id');
        $program->class_type = $request->get('class_type');
        $program->start_date = $request->get('start_date');
        $program->end_date = $request->get('end_date');
        $program->start_time = $request->get('start_time');
        $program->end_time = $request->get('end_time');
        $program->day = $request->get('day');
        $program->description = $request->get('description');
        $program->save();
        $this->storeFile($program, $request->file('image'));

        return redirect()->route('program.view.teacher')
            ->with('success', 'Class updated successful');
    }

    private function storeFile(Program $program, UploadedFile $file = null)
    {
        if ($file != null) {
            $this->deleteOldImage($program);
            $filename = $program->getRouteKey() . '.' . $file->getClientOriginalExtension();
            Storage::disk('do')->put('program/' . $filename, file_get_contents(request()->file('image')->getRealPath()), 'public');
            $program->image = $filename;
            $program->save();
        }
    }

    protected function deleteOldImage(Program $program)
    {
        if ($program->image == 'program-image.jpg') {
        } else {
            Storage::disk('do')->delete('program/' . $program->image);
        }
    }
}
