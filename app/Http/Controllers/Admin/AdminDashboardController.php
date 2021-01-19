<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AdminRequest;

class AdminDashboardController extends Controller
{
    public function __invoke(AdminRequest $request)
    {
        return view('admin.admin');
    }
}
