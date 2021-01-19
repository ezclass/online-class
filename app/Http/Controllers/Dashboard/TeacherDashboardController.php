<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\TeacherRequest;
use App\Models\Enrolment;
use App\Models\Grade;
use App\Models\Language;
use App\Models\Program;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;

class TeacherDashboardController extends Controller
{
    public function __invoke(TeacherRequest $request)
    {
        $program = Program::query()
            ->with(['grade', 'subject', 'language'])
            ->where('user_id', Auth::user()->id)
            ->get();

        $enrolRequest = Enrolment::query()
            ->with(['student', 'program'])
            ->orderBy('id', 'DESC')
            ->get();

        $subject = Subject::query()
            ->get();

        $language = Language::query()
            ->get();

        $grade = Grade::query()
            ->get();

        return view('dashboard.teacher')
            ->with([
                'program' => $program,
                'subject' => $subject,
                'language' => $language,
                'grade' => $grade,
                'enrolRequest' => $enrolRequest,
            ]);
    }
}
