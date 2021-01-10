<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateClassControllerRequest;
use App\Models\Program;

class UpdateClassController extends Controller
{
    public function __invoke(UpdateClassControllerRequest $request, Program $program)
    {
        if ($request->file('image')) {
            $save = $request->file('image');
            $filename = time() . '.' . $save->getClientOriginalExtension();
            $request->image->move('storage/class_image/', $filename);
            $program->image = $filename;
        }

        $program->name = $request->get('name');
        $program->grade = $request->get('grade');
        $program->subject_id = $request->get('subject_id');
        $program->medium_id = $request->get('medium_id');

        $program->save();
        return redirect()->route('dashboard')
            ->with('success', 'class update success');
    }
}
