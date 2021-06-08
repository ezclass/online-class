<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;

class AdminDashboardController extends Controller
{
    public function __invoke(AdminSuperAdminRequest $request)
    {
        return view('admin.admin-dashboard');
    }
}
