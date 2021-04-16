<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;

class PublicDashboardController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        return view('dashboard.public')
            ->with([
                'teacher' => $user,
                'programs' => Program::query()
                    ->with(['grade', 'subject', 'teacher', 'language'])
                    ->where('user_id', $user->id)
                    ->get(),
            ]);
    }
}
