<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StudentRequest;
use App\Models\Enrolment;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    public function __invoke(StudentRequest $request)
    {
        return view('dashboard.student')
            ->with([
                'enrolments' => Enrolment::query()
                    ->where('user_id', Auth::user()->id)
                    ->with(['program', 'program.teacher','program.subject',])
                    ->orderBy('id', 'DESC')
                    ->get(),
            ]);
    }
}
