<?php

namespace App\Http\Middleware\AdminPanel;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
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
        if (!\Auth::guest() && \Auth::user()->role_ID=='1')
        {
            return $next($request);

        } else {
            return redirect(route('Users.login'));
        }

        return redirect(route('Users.login'));
    }
}
