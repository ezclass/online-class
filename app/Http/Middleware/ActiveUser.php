<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ActiveUser
{
    public function handle(Request $request, Closure $next,  $redirectToRoute = null)
    {
        if (!$request->user()->isActive()) {
            return $request->expectsJson()
                ? abort(403, 'Your account is deactivate.')
                : Redirect::guest(URL::route($redirectToRoute ?: 'deactive.dashboard'));
        }

        return $next($request);
    }
}
