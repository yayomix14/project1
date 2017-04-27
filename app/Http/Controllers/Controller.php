<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Request;
use App\Modelos\Auditoria;
use App\Modelos\MonitoreoIp;

//use Illuminate\Support\Facades\Route;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {

        if(auth()->check() && !$this->esAdmin())
        { 
            $noAutorizado = $this->permisos();

            if($noAutorizado)
                $this->middleware('ForceRedirect');
        }
    }

    public function permisos()
    {
        return true;
    }

	public function esAdmin()
	{
		if(auth()->user()->tipo == 'admin')
			return true;
		
		return false;
	}

	public function auditar($accion='')
    {
        if($accion == ''){
            $accion = $this->actionName();
        }
        $usuario = auth()->user();
        $registro = new Auditoria;
        $registro->ip = Request::ip();
        $registro->id_usuario = $usuario->id;
        $registro->usuario = $usuario->username;
        $registro->tipo = $usuario->tipo;
        $registro->accion = $accion;
        $registro->fecha = date('Y-m-d H:i:s');
        $registro->save(); 
    }

    public function failLogin($usuario='')
    {
        $registro = new MonitoreoIp;
        $registro->usuario = $usuario;
        $registro->fecha = date('Y-m-d H:i:s');
        $registro->ip = Request::ip();
        $registro->save();
    }

    public function actionName()
    {
        return  str_replace('App\Http\Controllers\\', 
                                    '', 
                                    $this->getRouter()
                                         ->getCurrentRoute()
                                         ->getActionName()
                );
    }
}
