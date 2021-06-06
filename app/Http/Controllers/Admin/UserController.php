<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;
use App\Http\Requests\Admin\SuperAdminRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserController extends Controller
{
    public function allUser(AdminSuperAdminRequest $request)
    {
        $user = User::query()
            ->when($request->filled('role'), function ($query) use ($request) {
                $roleId = $request->get('role');

                $query->whereHas('roles', function (Builder $query) use ($roleId) {
                    $query->where('role_id', $roleId);
                });
            })
            ->where('name', 'like', "%$request->name%")
            ->with('roles')
            ->where('phone_number_verified_at', "<>", null)
            ->where('email_verified_at', "<>", null)
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return view('admin.all-user')
            ->with([
                'users' => $user,
                'selectedRoleId' => $request->role,
            ]);
    }

    public function notVerified(AdminSuperAdminRequest $request)
    {
        return view('admin.not-verified-user');
    }

    public function inActiveUser(SuperAdminRequest $request)
    {
        return view('admin.inactive-user');
    }
}
