<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;
use App\Models\Program;

class EnrolledStudentDetailController extends Controller
{
    public function __invoke(AdminSuperAdminRequest $request, Program $program)
    {
        return view('admin.enrolled-student-detail')
            ->with([
                'program' => $program,
                'enrolments' => $program->getStudent($program),
            ]);
    }
}
