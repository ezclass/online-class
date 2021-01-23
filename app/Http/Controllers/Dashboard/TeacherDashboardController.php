<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\TeacherRequest;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class TeacherDashboardController extends Controller
{
    public function __invoke(TeacherRequest $request)
    {
        return view('dashboard.teacher')
            ->with([
                'programs' => Program::query()
                ->with(['grade', 'subject', 'language'])
                ->where('user_id', Auth::user()->id)
                ->get(),
            ]);
    }
}
