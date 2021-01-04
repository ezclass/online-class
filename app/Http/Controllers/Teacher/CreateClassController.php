<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateClassControllerRequest;
use App\Models\Program;

class CreateClassController extends Controller
{
    public function __invoke(CreateClassControllerRequest $request)
    {
        $class = new Program();

        $request->file('image');
        $save = $request->file('image');
        $filename = time() . '.' . $save->getClientOriginalExtension();
        $request->image->move('storage/class_image/', $filename);
        $class->image = $filename;

        $class->name = $request->get('name');
        $class->grade = $request->get('grade');
        $class->subject  = $request->get('subject');
        $class->medium  = $request->get('medium');
        $class->teacher_id = $request->get('teacher_id');
        $class->save();

        return redirect()
            ->route('dashboard')
            ->with('success', 'class created success');
    }
}
