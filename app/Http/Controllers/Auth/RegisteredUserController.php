<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:35',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'avatar' => 'required',
            'role' => 'required|in:student,teacher',
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => 'avatar.jpg',
        ]));

        $user->assignRole($request->role);
        event(new Registered($user));

        if ($user->hasRole(Role::ROLE_TEACHER)) {
            return redirect(RouteServiceProvider::TEACHER);
        }
        if ($user->hasRole(Role::ROLE_STUDENT)) {
            return redirect(RouteServiceProvider::STUDENT);
        }
    }
}
