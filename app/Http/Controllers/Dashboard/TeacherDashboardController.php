<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class TeacherDashboardController extends Controller
{
    public function __invoke(Program $program)
    {
        $program = $program->all()
            ->where('teacher_id', Auth::user()->id);

        return view('dashboard')
            ->with(['program' => $program]);
    }
}
