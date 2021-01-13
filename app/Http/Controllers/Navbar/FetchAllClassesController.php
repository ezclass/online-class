<?php

namespace App\Http\Controllers\Navbar;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Language;
use App\Models\Program;
use App\Models\Subject;

class FetchAllClassesController extends Controller
{
    public function __invoke()
    {
        $program = Program::query()
            ->paginate(15);

        $subject = Subject::query()
            ->get();

        $language = Language::query()
            ->get();

        $grade = Grade::query()
            ->get();


        return view('navbar.fatchclasses')
            ->with(['program' => $program, 'subject' => $subject, 'language' => $language, 'grade' => $grade]);
    }
}
