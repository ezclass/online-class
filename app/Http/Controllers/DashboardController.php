<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        return redirect()->route($this->getRouteForUser($request->user()));
    }

    private function getRouteForUser(User $user): string
    {
        if ($user->isActive()) {
            if ($user->isStudent()) {
                return 'student.dashboard';
            }

            if ($user->isTeacher()) {
                return 'teacher.dashboard';
            }

            if ($user->isAdmin()) {
                return 'admin.dashboard';
            }

            if ($user->isSuperAdmin()) {
                return 'admin.dashboard';
            }
        }
        return 'deactive.dashboard';
    }
}
