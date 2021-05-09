<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;
use App\Models\User;

class UserStatusController extends Controller
{
    public function deactive(AdminSuperAdminRequest $request, User $user)
    {
        $user->status = false;
        $user->save();

        return redirect()->back()
            ->with('success', 'User deactivation successful');
    }

    public function active(AdminSuperAdminRequest $request, User $user)
    {
        $user->status = true;
        $user->save();

        return redirect()->back()
            ->with('success', 'User activation successful');
    }
}
