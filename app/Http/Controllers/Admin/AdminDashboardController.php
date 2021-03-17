<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AdminRequest;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function __invoke(AdminRequest $request)
    {
        return view('admin.dashboard')
            ->with('roles')
            ->with([
                'users' => User::query()
                    ->get()
            ]);
    }
}
