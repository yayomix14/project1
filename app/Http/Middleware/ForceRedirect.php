<?php

namespace App\Http\Middleware;

use Closure;

class ForceRedirect
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
        return redirect()->route('index')
                         ->with('msj-error', 'No puede acceder a esta funcion');

        //return $next($request);
    }
}
