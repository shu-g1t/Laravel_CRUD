<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('staff/login');
    //     }
    // }

    protected $auth;



    public function handle($request, Closure $next, ...$guards)
    {
      if(!Auth::check()) {
        return redirect('/staff/login');
      }

      return $next($request);
    }

}
