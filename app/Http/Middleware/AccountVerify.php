<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class AccountVerify
{
    public function handle(Request $request, Closure $next,  $redirectToRoute = null)
    {
        if ($request->user()->isTeacher()) {
            if (!$request->user()->isAccountVerified()) {
                return $request->expectsJson()
                    ? abort(403, 'Your account is not verified')
                    : Redirect::guest(URL::route($redirectToRoute ?: 'account.verify'));
            }
        }

        return $next($request);
    }
}
