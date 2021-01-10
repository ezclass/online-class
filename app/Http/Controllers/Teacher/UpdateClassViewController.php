<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateClassViewControllerRequest;
use App\Models\Medium;
use App\Models\Program;
use App\Models\Subject;

class UpdateClassViewController extends Controller
{
    public function __invoke(UpdateClassViewControllerRequest $rquest ,Program $program)
    {
        $program->load(['subject_program','medium_program']);

        $subject = Subject::query()
            ->get();

        $medium = Medium::query()
            ->get();

        return view('class.updateclass')
            ->with(['program' => $program, 'subject'=>$subject, 'medium'=>$medium]);
    }
}
