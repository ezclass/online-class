<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateClassControllerRequest;
use App\Models\Program;
use Illuminate\Http\Request;

class CreateClassController extends Controller
{
    public function __invoke(CreateClassControllerRequest $request)
    {
        $class = new Program();
        $class->name = $request->get('name');
        $class->grade = $request->get('grade');
        $class->image = $request->get('image');
        $class->teacher_id = $request->get('teacher_id');
        $class->subject_id  = $request->get('subject_id');
        $class->medium_id  = $request->get('medium_id');
        $class->save();

        return response($class, 201);
    }
}
