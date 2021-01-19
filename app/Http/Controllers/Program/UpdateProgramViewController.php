<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Language;
use App\Models\Program;
use App\Models\Subject;
use Illuminate\Http\Request;

class UpdateProgramViewController extends Controller
{
    public function __invoke(Request $request, Program $program)
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
