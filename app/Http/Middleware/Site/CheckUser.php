<?php

namespace App\Http\Middleware\Site;

use Closure;
use Illuminate\Http\Request;

class CheckUser
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
        if (!\Auth::guest() && \Auth::user()->role_ID=='2')
        {
            return $next($request);

        } else {
            return redirect(route('Users.site.login'));
        }

        return redirect(route('Users.site.login'));
    }
}
