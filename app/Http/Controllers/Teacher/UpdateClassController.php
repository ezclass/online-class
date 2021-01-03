<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateClassControllerRequest;
use App\Models\Program;
use Illuminate\Http\Request;

class UpdateClassController extends Controller
{
    public function __invoke(UpdateClassControllerRequest $request, Program $program)
    {
        $program->name = $request->get('name');
        $program->name = $request->get('grade');
        $program->name = $request->get('image');
        $program->name = $request->get('subject_id');
        $program->name = $request->get('meadium_id');
        $program->save();
    }
}
