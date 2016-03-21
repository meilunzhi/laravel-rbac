<?php

namespace App\Http\Middleware;

use Closure;
use Session , Config , Cookie;

class CheckAuth
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
		$sessionkey = cookie::get(config::get('session.web_login_cookie'));
		$userInfo = session::get($sessionkey);
		
		if(!isset($userInfo->id)){
            return redirect('alpha/login');
		}
		
		global $userId;
		$userId  = $userInfo->id;

		$nowUrl = $request->requestUri;
		$permissions = $userInfo->permissions;

		if(!in_array($_SERVER['REQUEST_URI'] , $permissions)){
			return response('access denied' , 403);	
		}

        return $next($request);
    }
}
