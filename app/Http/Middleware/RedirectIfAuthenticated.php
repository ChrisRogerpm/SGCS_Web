<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::User()->USUtipo_usuario == 1)
            {
                return redirect('/Proyecto');
            }
            elseif (Auth::User()->USUtipo_usuario == 2)
            {
                return redirect('/Equipo');
            }
        }
        return $next($request);
    }
}
