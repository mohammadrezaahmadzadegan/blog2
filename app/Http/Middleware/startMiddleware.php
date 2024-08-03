<?php

namespace App\Http\Middleware;

use Closure;

class startMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$id)
    {
         if($request->has('startMiddleware') && $request->startMiddleware == $id){
            $resulte = $next($request);
            return $resulte;
        } else {
            abort('404');
        }
    }
}
