<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
    public function handle($request, Closure $next, $guard = null)
    {
 
        if (Auth::guard($guard)->check()) {
            if($guard === 'admin') {
                return redirect('/admin/home');    
            }
            return redirect('/');
        }
 
        return $next($request);
    }
}
