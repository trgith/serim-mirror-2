<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PublicServerMiddleware
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
        $roles = explode(',', $request->user()->menuroles);
        if (! in_array('servidor_publico', $roles) ) {
            return abort( 401 );
        } else {

        }
        return $next($request);
    }
}
