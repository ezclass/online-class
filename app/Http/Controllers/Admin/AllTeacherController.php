<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;

class AllTeacherController extends Controller
{
    public function __invoke(AdminSuperAdminRequest $request)
    {
        return view('admin.all-teacher');
    }
}
