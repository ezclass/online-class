<?php

namespace App\Http\Controllers\Program;

use ApiChef\Obfuscate\Support\Facades\Obfuscate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Program\CreateProgramRequest;
use App\Models\Program;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CreateProgramController extends Controller
{
    public function __invoke(CreateProgramRequest $request)
    {
        $program = new Program();
        $program->grade_id = Obfuscate::decode($request->get('grade'));
        $program->fees = $request->get('fees');
        $program->subject_id  = Obfuscate::decode($request->get('subject'));
        $program->language_id  = Obfuscate::decode($request->get('medium'));
        $program->class_type = $request->get('class_type');
        $program->start_date = $request->get('start_date');
        $program->end_date = $request->get('end_date');
        $program->start_time = $request->get('start_time');
        $program->end_time = $request->get('end_time');
        $program->day = $request->get('day');
        $program->description = $request->get('description');
        $program->user_id = Auth::user()->id;
        $program->status = 1;
        $program->image = "program-image.jpg";
        $program->save();
        $this->storeFile($program, $request->file('image'));

        return redirect()
            ->route('program.view.teacher')
            ->with('success', 'Class created successful');
    }

    private function storeFile(Program $program, UploadedFile $file = null)
    {
        if ($file != null) {
            $filename = $program->getRouteKey() . '.' . $file->getClientOriginalExtension();
            Storage::disk('do')->put('program/' . $filename, file_get_contents(request()->file('image')->getRealPath()), 'public');
            $program->image = $filename;
            $program->save();
        }
    }
}
