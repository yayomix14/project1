<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(!is_null($this->segment(4)))
        {
            return $this->checkId();
        }

        if(auth()->user()->tipo == 'admin')
            return true;
        else
            return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if(isset($this->current_password))
        {
            $id = (int) $this->segment(3);
            return [
                    'current_password' => "required|check_password:".strval($id),
                    //'password' => "required|confirmed|regex:/^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%^&+=!?]).*$/",
                    'password_confirmation' => 'required',
                ];
        }

        switch ($this->method()) {
            case 'POST':
                return [
                    'username' => 'required|unique:usuarios,username|alpha_dash',
                    'cedula' => 'required|unique:usuarios,cedula|integer',
                    //'password' => "required|confirmed|regex:/^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%^&+=!?]).*$/",
                    'password_confirmation' => 'required',
                    'tipo' => 'required|in:admin,sudo,usuario'
                ];
                break;

            case 'PUT':
                return [
                    'username' => 'required|alpha_dash',
                    'cedula' => 'required|integer',
                    'tipo' => 'required|in:admin,sudo,usuario'
                ];
                break;
            
            default:
                return [];
                break;
        }
        
        
    }

    public function messages()
    {
        return [
            'username.required' => 'Ingrese nombre de usuario',
            'username.unique' => 'El nombre de usuario ya esta registrado',
            'username.alpha_dash' => 'Nombre de usuario debe ser alfanumerico',

            'cedula.required' => 'Ingrese numero de cedula',
            'cedula.unique' => 'La cedula ya esta registrada',
            'cedula.integer' => 'La cedula debe ser un numero entero',

            'password.required' => 'Ingrese una contraseña',
            'password.regex' => 'La contraseña debe contener al menos 8 caracteres, un numero, una letra mayuscula, una letra minuscula, y un caracter especial',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'password_confirmation.required' => 'Debe confirmar su contraseña',

            'tipo.required' => 'Debe elegir un tipo de usuario',
            'tipo.in' => 'Debe seleccionar un tipo de usuario valido',

            'current_password.check_password' => 'Contraseña actual invalida'
        ];
    }
}
