<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\Welcome;
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
            'phone_number' => 'required|string|max:10|unique:users|digits:10',
            'gender' => 'required|string|in:Male,Female',
            'password' => 'required|string|confirmed|min:8',
            'avatar' => 'required',
            'role' => 'required|in:student,teacher',
            'privacy-policy' => 'required|in:1',
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
            'avatar' => 'avatar.jpg',
        ]));

        $user->assignRole($request->role);

        event(new Registered($user));

        $user->notify(new Welcome());
        
        return redirect(RouteServiceProvider::HOME);
    }
}
