<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\TeacherRequest;

class TeacherDashboardController extends Controller
{
    public function __invoke(TeacherRequest $request)
    {
        return view('dashboard.teacher');
    }
}
