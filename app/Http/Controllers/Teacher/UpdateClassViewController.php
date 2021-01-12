<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateClassViewControllerRequest;
use App\Models\Grade;
use App\Models\Language;
use App\Models\Medium;
use App\Models\Program;
use App\Models\Subject;

class UpdateClassViewController extends Controller
{
    public function __invoke(UpdateClassViewControllerRequest $rquest, Program $program)
    {
        $program->load(['subject_program', 'language']);

        $subject = Subject::query()
            ->get();

        $language = Language::query()
            ->get();

        $grade = Grade::query()
            ->get();

        return view('class.updateclass')
            ->with(['program' => $program, 'subject' => $subject, 'language' => $language, 'grade' => $grade]);
    }
}
