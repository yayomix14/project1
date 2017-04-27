<?php

namespace App\Http\Middleware;

use Closure;

use App\Modelos\MonitoreoIp;

class BlockIp
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
        /*if(auth()->check())
            return redirect()->route('index');

        $intentosPermitidos = 5;
        $intentos = MonitoreoIp::where(['ip' => $request->ip(), 
                                        'fecha' => date('Y-m-d')
                                ])->count();

        $bloqueado = ($intentos >= $intentosPermitidos) ? true : false;
        
        if($request->path() == 'acceso-negado' && !$bloqueado)
            return redirect()->action('AutenticacionController@login');

        if($request->path() == 'login' && $bloqueado)
            return redirect()->route('bloqueo');*/

        return $next($request);
    }
}
