<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PublicDashboardController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        return view('dashboard.public')
            ->with([
                'teacher' => $user,
            ]);
    }
}
