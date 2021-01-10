<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Medium;
use App\Models\Program;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;

class TeacherDashboardController extends Controller
{
    public function __invoke()
    {
        $program = Program::query()
            ->where('user_id', Auth::user()->id)
            ->get();

        $subject = Subject::query()
            ->get();

        $medium = Medium::query()
            ->get();

        return view('dashboard')
            ->with(['program' => $program, 'subject' => $subject, 'medium' => $medium]);
    }
}
