<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class TeacherDashboardController extends Controller
{
    public function __invoke()
    {
        $program = Program::query()
            ->where('user_id', Auth::user()->id)
            ->get();

        return view('dashboard')
            ->with(['program' => $program]);
    }
}
