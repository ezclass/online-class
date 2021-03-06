<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SuperAdminRequest;

class SuperAdminDashboardController extends Controller
{
    public function __invoke(SuperAdminRequest $request)
    {
        return view('admin.super-admin-dashboard');
    }
}
