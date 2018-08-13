<?php

namespace Laraning\Galaxia\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard(glxguard())->check()) {
            return redirect()->intended(route('galaxia.login.show'));
        };

        return $next($request);
    }
}
