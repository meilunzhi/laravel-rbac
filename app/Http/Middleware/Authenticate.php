<?php

namespace App\Http\Middleware;

use Closure;
use Session , Config , Cookie;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        return $next($request);
    }
}
