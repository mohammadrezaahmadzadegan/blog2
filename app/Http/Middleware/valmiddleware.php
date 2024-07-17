<?php

namespace App\Http\Middleware;

use Closure;

class valmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$val)
    {
        dd($request);


    }
}
