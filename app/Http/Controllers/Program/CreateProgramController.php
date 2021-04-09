<?php

namespace App\Http\Controllers\Program;

use ApiChef\Obfuscate\Support\Facades\Obfuscate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Program\CreateProgramRequest;
use App\Models\Program;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

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
        $program->user_id = Auth::user()->id;
        $program->save();
        $this->storeFile($program, $request->file('image'));

        return redirect()
            ->route('program.view.teacher')
            ->with('success', 'Class created successful');
    }

    private function storeFile(Program $program, UploadedFile $file = null)
    {
        if ($file != null) {
            $filename = $program->id . '.' . $file->getClientOriginalExtension();
            $file->move('storage/class_image/', $filename);
            $program->image = $filename;
            $program->save();
        }
    }
}
