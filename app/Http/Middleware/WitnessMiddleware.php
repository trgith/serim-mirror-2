<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class WitnessMiddleware
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
        if ( ! in_array('testigo', $roles) ) {
            return abort( 401 );
        }
        return $next($request);

    }
}
