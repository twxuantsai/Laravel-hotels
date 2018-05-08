<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if (session('user') === null || session('role') === null) {
            return redirect() -> route('login');
        }

        if (session('role') !== 'admin') {
            return redirect() -> route('index');
        }

        return $next($request);
    }
}
