<?php

namespace App\Http\Middleware;

use Closure;

class Master
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
        if (auth()->check() && $request->user()->isAdmin == TRUE) {
            return $next($request);
        }

        return redirect()->route('404');
    }
}
