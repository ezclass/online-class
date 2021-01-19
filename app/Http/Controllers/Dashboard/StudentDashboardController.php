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
        $enrolRequest = Enrolment::query()
            ->where('user_id', Auth::user()->id)
            ->with(['program'])
            ->orderBy('id', 'DESC')
            ->get();

        return view('dashboard.student')
            ->with([
                'enrolRequest' => $enrolRequest,
            ]);
    }
}
