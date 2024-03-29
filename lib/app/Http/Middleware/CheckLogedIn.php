<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLogedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->level == 1)
            {
                return $next($request);
            }
            else
            {
                Auth::logout();
                return redirect()->intended('login');
            }
        }
        else
        {
            return redirect()->intended('login');
        }
       
    }
}
