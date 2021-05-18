<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\User;

class UpdateUserController extends Controller
{
    public function __invoke(UpdateUserRequest $request, User $user)
    {
        $user->roles()->sync($request->roles);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->save();

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'User Update succesful');
    }
}
