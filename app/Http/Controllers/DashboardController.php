<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        return request()->route($this->getRouteForUser($request->user()));
    }

    private function getRouteForUser(User $user): string
    {
        if ($user->isStudent()) {
            return 'student.dashboard';
        }

        if ($user->isTeacher()) {
            return 'teacher.dashboard';
        }

        return 'admin.dashboard';
    }
}
