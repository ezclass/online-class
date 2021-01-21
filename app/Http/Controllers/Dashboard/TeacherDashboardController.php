<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\TeacherRequest;
use App\Models\Enrolment;
use App\Models\Grade;
use App\Models\Language;
use App\Models\PaymentDate;
use App\Models\PaymentPolicy;
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
            ->with(['student', 'program', 'paymentpolicy', 'paymentdate'])
            ->orderBy('id', 'ASC')
            ->get();

        $subject = Subject::query()
            ->get();

        $language = Language::query()
            ->get();

        $grade = Grade::query()
            ->get();

        $paymentDate = PaymentDate::query()
            ->get();


        $paymentPolicy = PaymentPolicy::query()
            ->get();

        return view('dashboard.teacher')
            ->with([
                'program' => $program,
                'subject' => $subject,
                'language' => $language,
                'grade' => $grade,
                'enrolRequest' => $enrolRequest,
                'paymentDate' => $paymentDate,
                'paymentPolicy' => $paymentPolicy,
            ]);
    }
}
