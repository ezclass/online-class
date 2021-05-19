<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SuperAdminRequest;
use App\Models\User;

class DeleteUserController extends Controller
{
    public function __invoke(SuperAdminRequest $request, User $user)
    {
        $user->delete();

        return redirect()
            ->route('super.admin.dashboard')
            ->with('success', 'user deleted successful');
    }
}
