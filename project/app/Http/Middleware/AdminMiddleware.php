<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::check())
        {
            if($request->user()->role)
            {
                return $next($request);
            }
            return redirect('/');
        }

        return redirect('/login');
    }
}
