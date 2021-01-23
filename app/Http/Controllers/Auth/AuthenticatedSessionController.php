<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        if (Auth::user()->hasRole(Role::ROLE_TEACHER)) {
            return redirect(RouteServiceProvider::TEACHER);
        }
        if (Auth::user()->hasRole(Role::ROLE_STUDENT)) {
            return redirect(RouteServiceProvider::STUDENT);
        }
        if (Auth::user()->hasRole(Role::ROLE_ADMIN)) {
            return redirect(RouteServiceProvider::ADMIN);
        }
        if (Auth::user()->hasRole(Role::ROLE_SUPER_ADMIN)) {
            return redirect(RouteServiceProvider::SUPER_ADMIN);
        }
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
