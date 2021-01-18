<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProgramViewRequest;
use App\Models\Grade;
use App\Models\Language;
use App\Models\Program;
use App\Models\Subject;

class UpdateClassViewController extends Controller
{
    public function __invoke(UpdateProgramViewRequest $rquest, Program $program)
    {
        $subject = Subject::query()
            ->get();

        $language = Language::query()
            ->get();

        $grade = Grade::query()
            ->get();

        return view('program.updateprogram')
            ->with(['program' => $program, 'subject' => $subject, 'language' => $language, 'grade' => $grade]);
    }
}
