<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateClassControllerRequest;
use App\Models\Program;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UpdateClassController extends Controller
{
    public function __invoke(UpdateClassControllerRequest $request, Program $program)
    {
        $program->name = $request->get('name');
        $program->grade_id = $request->get('grade_id');
        $program->subject_id = $request->get('subject_id');
        $program->language_id = $request->get('language_id');
        $program->save();
        $this->storeFile($program, $request->file('image'));

        return redirect()->route('dashboard')
            ->with('success', 'class update success');
    }

    private function storeFile(Program $program, UploadedFile $file = null)
    {
        if ($file != null) {
            Storage::delete('/public/class_image/'.$program->image);
            $filename = $program->id . '.' . $file->getClientOriginalExtension();
            $file->move('storage/class_image/', $filename);
            $program->image = $filename;
            $program->save();
        }
    }
}
