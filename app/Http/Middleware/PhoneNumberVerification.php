<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class PhoneNumberVerification
{
    public function handle(Request $request, Closure $next, $redirectToRoute = null)
    {
        if (!$request->user()->isVerified()) {
            return $request->expectsJson()
                ? abort(403, 'verify your phone number.')
                : Redirect::guest(URL::route($redirectToRoute ?: 'phone.number.verification'));
        }

        return $next($request);
    }
}
