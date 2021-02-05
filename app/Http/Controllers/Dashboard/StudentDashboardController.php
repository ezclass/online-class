<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StudentRequest;

class StudentDashboardController extends Controller
{
    public function __invoke(StudentRequest $request)
    {
        return view('dashboard.student');
    }
}
