<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SuperAdminRequest;
use App\Models\User;
use Spatie\Permission\Models\Role;

class EditUserController extends Controller
{
    public function __invoke(SuperAdminRequest $request, User $user)
    {
        return view('admin.edit-user')
            ->with([
                'user' => $user,
                'roles' => Role::query()
                ->get()
            ]);
    }
}
