<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProgramViewRequest;
use App\Models\Grade;
use App\Models\Language;
use App\Models\Program;
use App\Models\Subject;

class UpdateProgramViewController extends Controller
{
    public function __invoke(UpdateProgramViewRequest $request, Program $program)
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
