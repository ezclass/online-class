<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class Reference
{
    public function handle(Request $request, Closure $next,  $redirectToRoute = null)
    {
        if ($request->user()->isStudent()) {
            if (!$request->user()->isReference()) {
                return $request->expectsJson()
                    ? abort(403, 'Please add a reference number')
                    : Redirect::guest(URL::route($redirectToRoute ?: 'add.reference'));
            }
        }

        return $next($request);
    }
}
