<?php

namespace App\Http\Middleware;

use Closure;

class Chekuser
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
        // if($request->has('allow')){
        //     $resulte = $next($request);
        //     return $resulte;
        // } else {
        //     abort('404');
        // }
        $resulte = $next($request);
        echo 'this is middleware';
        return $resulte;
    }
}
