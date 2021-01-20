<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AdminRequest;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function __invoke(AdminRequest $request)
    {
        $users = User::query()
            ->get();
        return view('admin.admin')
            ->with(['users' => $users]);
    }
}
