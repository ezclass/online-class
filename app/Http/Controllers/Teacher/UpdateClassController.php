<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateClassControllerRequest;
use App\Models\Program;

class UpdateClassController extends Controller
{
    public function __invoke(UpdateClassControllerRequest $request)
    {
        $Program = Program::find($request->id);
        $Program->name = $request->get('name');
        $Program->grade = $request->get('grade');
        $Program->subject = $request->get('subject');
        $Program->medium = $request->get('medium');
        $Program->teacher_id = $request->get('teacher_id');
        $Program->save();

        return redirect()->route('dashboard')
            ->with('success', 'class update success');
    }
}
