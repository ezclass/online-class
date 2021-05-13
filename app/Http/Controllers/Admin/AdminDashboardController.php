<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class AdminDashboardController extends Controller
{
    public function __invoke(AdminSuperAdminRequest $request)
    {
        $user = User::query()
            ->when($request->filled('role'), function ($query) use ($request) {
                $roleId = $request->get('role');

                $query->whereHas('roles', function (Builder $query) use ($roleId) {
                    $query->where('role_id', $roleId);
                });
            })
            ->with('roles')
            ->paginate(10);

        return view('admin.dashboard')
            ->with([
                'users' => $user,
                'selectedRoleId' => $request->role,
            ]);
    }
}
