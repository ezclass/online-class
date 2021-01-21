<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EditUserRequest;
use App\Models\User;

class EditUsersController extends Controller
{
    public function __invoke(EditUserRequest $request, User $user)
    {
        return view('admin.edituser')
            ->with(['user' => $user]);
    }
}
