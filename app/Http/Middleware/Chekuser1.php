<?php

namespace App\Http\Middleware;

use Closure;

class Chekuser1
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
        $resulte = $next($request);
        echo 'this is middleware1';
        return $resulte;
    }
}
