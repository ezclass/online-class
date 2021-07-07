<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;
use App\Models\Enrolment;
use App\Models\User;

class StudentAllDetailController extends Controller
{
    public function view(AdminSuperAdminRequest $request, User $user)
    {
        return view('admin.student-all-detail')
            ->with([
                'student' => $user,
                'enrolments' => Enrolment::query()
                ->with(['program', 'program.teacher', 'program.subject', 'program.grade'])
                    ->where('user_id', $user->id)
                    ->get()

            ]);
    }
}
