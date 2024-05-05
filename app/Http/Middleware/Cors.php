<?php

namespace App\Http\Middleware;

use Closure;
use Fruitcake\Cors\HandleCors as Middleware;

class Cors extends Middleware
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
        $response = $next($request);

        // Modify CORS headers here if needed...

        return $response;
    }
}
