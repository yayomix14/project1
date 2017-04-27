<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;
use App\Modelos\MonitoreoIp;

class AutenticacionController extends Controller
{
    public function __construct()
    {
       $this->middleware('BlockIp', ['only' => ['login']]);
    }

    public function login(Request $peticion)
    {
    	if($peticion->isMethod('post'))
    	{
    		if (Auth::attempt(['username' => $peticion->username, 
    					   'password' => $peticion->password])) {

                $usuario = auth()->user();

                if( $this->evalEstatus($usuario) )
                {
                    $this->auditar();
                    
                    $usuario->ultima_conexion = date('Y-m-d');
                    if($usuario->estatus == 11)
                        $usuario->estatus = 1;
                    $usuario->save();
                    
                    return redirect()->route('index');
                }
                else
                {
                    Auth::logout();
                }
	        }

            $this->failLogin($peticion->username);
            $peticion->session()->flash('msj-error', 'Datos incorrectos');
    	}

    	return view('autenticacion.login');
    }

    public function logout()
    {
        if(Auth::check())
            $this->auditar();

    	Auth::logout();

    	return redirect()->action('AutenticacionController@login');
    }

    public function evalEstatus($usuario)
    {
        if($usuario->estatus == 1)
        {
            $ultima_conexion = new Carbon($usuario->ultima_conexion);

            if($ultima_conexion->diffInMonths() >= 3)
            {
                $usuario->estatus = 12;
                $usuario->save();

                return false;
            }
        }
        elseif (in_array($usuario->estatus, [2, 12])) {
            return false;
        }

        return true;        
    }
}
