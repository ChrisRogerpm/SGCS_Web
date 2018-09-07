<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class Equipo
{
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    public function handle($request, Closure $next)
    {
        if(Auth::User()->USUtipo_usuario == 2)
        {
            return $next($request);
        }
        else
        {
            return back();
        }
    }
}
