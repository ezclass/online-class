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
        $class = new Program();
        $class->name = $request->get('name');
        $class->grade_id = Obfuscate::decode($request->get('grade'));
        $class->fees = $request->get('fees');
        $class->subject_id  = Obfuscate::decode($request->get('subject'));
        $class->language_id  = Obfuscate::decode($request->get('medium'));
        $class->user_id = Auth::user()->id;
        $class->save();
        $this->storeFile($class, $request->file('image'));

        return redirect()
            ->route('teacher.dashboard')
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
