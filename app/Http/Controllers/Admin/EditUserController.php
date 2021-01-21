<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EditUserRequest;
use App\Models\User;
use Spatie\Permission\Models\Role;

class EditUserController extends Controller
{
    public function __invoke(EditUserRequest $request, User $user)
    {
        $roles = Role::query()
            ->get();

        return view('admin.edituser')
            ->with([
                'user' => $user,
                'roles' => $roles
            ]);
    }
}
