<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        if (\Auth::check()) {
            return $next($request);
        }

        return redirect()->route('auth.login.index');
    }

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('auth.login.index');
        }
    }
}
