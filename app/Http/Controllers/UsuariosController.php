<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Modelos\Usuario;
use App\Http\Requests\UsuarioRequest;

class UsuariosController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['only'=>['permisos','listar','registrar','modificar','eliminar','cambiarClave','cambiarEstatus']]);
    }

    public function permisos()
	{
		$metodo = explode('@', $this->actionName())[1];
        $metodosPermitidos = ['index'];

		if(auth()->user()->tipo == 'usuario')
		{
			if(!in_array($metodo, $metodosPermitidos))
            {
                return true;
            }
		}

        return false;
	}

    public function listar()
    {
    	$usuarios = Usuario::paginate(6);
        return view('usuarios.listar', ['usuarios' => $usuarios]);
    }

    public function registrar(UsuarioRequest $peticion)
    {
    	if($peticion->isMethod('post'))
    	{      
            $this->auditar('Registro un usuario ');
    		$usuario = new Usuario($peticion->all());
    		$usuario->password = bcrypt($peticion->password);
    		$usuario->save();
    		return redirect()->action('UsuariosController@listar')
                             ->with('msj-exito', 'Usuario registrado');
    	}

        return view('usuarios.registrar', ['verClave' => true]);
    }

    public function modificar(UsuarioRequest $peticion, $id)
    {
    	$usuario = Usuario::find($id);
        $user = $usuario->username;
    	if($peticion->isMethod('put'))
    	{      
            $this->auditar('modifico un usuario '.$user);
    		$usuario->username = $peticion->username;
    		$usuario->cedula = $peticion->cedula;
    		$usuario->tipo = $peticion->tipo;
    		$usuario->save();
    		return redirect()->action('UsuariosController@listar')
                             ->with('msj-exito', 'Información de usuario actualizada');
    	}

        return view('usuarios.modificar', ['usuario' => $usuario, 'verClave' => false]);
    }

    public function eliminar(UsuarioRequest $peticion, $id='')
    {   	
        
    	$usuario = Usuario::find($id);
        $user = $usuario->username;
        $this->auditar('elimino un usuario '.$user);
		$usuario->delete();
		return redirect()->action('UsuariosController@listar')
                         ->with('msj-exito', 'Usuario eliminado');
    }

    public function cambiarClave(UsuarioRequest $peticion, $id='')
    {
        $usuario = Usuario::find($id);
        $user = $usuario->username;

        if($peticion->isMethod('put'))
        {   
            $this->auditar('cambio clave '.$user);
            $usuario->password = bcrypt($peticion->password);
            $usuario->save();
            return redirect()->action('UsuariosController@listar')
                             ->with('msj-exito', 'Nueva clave registrada');
        }

        return view('usuarios.cambiarClave', ['usuario' => 
                                                ['id' => $usuario->id,
                                                 'encrypted_id' => $usuario->encrypted_id]
                                             ]
                                        );
    }

    public function cambiarEstatus(UsuarioRequest $peticion, $id)
    {
        $usuario = Usuario::find($id);
        $user = $usuario->username;
        if( in_array($usuario->estatus, [1, 11]) ){
            $this->auditar('cambio estatus usuario '.$user);
            $usuario->estatus = 2;
        }
        elseif (in_array($usuario->estatus, [2, 12])) {
            $this->auditar('cambio estatus usuario '.$user);
            $usuario->estatus = 11;
        }

        $usuario->save();

        return redirect()->action('UsuariosController@listar')
                         ->with('msj-exito', 'Información de usuario actualizada');
    }
}
