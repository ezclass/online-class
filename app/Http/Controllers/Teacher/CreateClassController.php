<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateClassControllerRequest;
use App\Models\Program;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

class CreateClassController extends Controller
{
    public function __invoke(CreateClassControllerRequest $request)
    {
        $class = new Program();
        $class->name = $request->get('name');
        $class->grade_id = $request->get('grade_id');
        $class->subject_id  = $request->get('subject_id');
        $class->language_id  = $request->get('language_id');
        $class->user_id = Auth::user()->id;
        $class->save();
        $this->storeFile($class, $request->file('image'));

        return redirect()
            ->route('dashboard')
            ->with('success', 'class created success');
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
