<?php

namespace App\Http\Middleware\Site;

use Closure;
use Illuminate\Http\Request;

class LoginUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (\Auth::guest())
        {
            return $next($request);

        }
        elseif(!\Auth::guest() && \Auth::user()->role_ID=='1')
        {
            return $next($request);
        }
        else
        {
            return redirect(route('homepage'));
        }
    }
}
