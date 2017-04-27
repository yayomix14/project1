<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Modelos\Auditoria;
use App\Modelos\MonitoreoIp;


class AuditoriaController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth',['only'=>['listar','monitoreoIp','desbloquearIp']]);
    }

    public function listar()
    {
    	$registros = Auditoria::orderBy('id', 'desc')->paginate(6);
        return view('auditoria.listar', ['registros' => $registros]);
    }

    public function monitoreoIp()
    {
        $monitoreo = new MonitoreoIp;

        $registros = $monitoreo->select('ip', DB::raw('count(ip) as intentos'), 'usuario', 'fecha')
                               ->where('fecha', '=', date('Y-m-d'))
                               ->groupBy('ip')
                               ->having('intentos', '>', 0)
                               ->get();

        return view('auditoria.monitoreo_ip', ['registros' => $registros]);
    }

    public function desbloquearIp(Request $peticion, $ip='')
    {   
        $this->auditar('desbloqueo la ip: '.$ip);
        MonitoreoIp::where('ip', '=', $ip)->delete();
        return redirect()->action('AuditoriaController@monitoreoIp')
                         ->with('msj-exito', 'Usuario desbloqueado');
    }
}
