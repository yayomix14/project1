<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GeneralRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [       
            'fecha' => 'required|date',
            'codigo' => 'required|numeric',
            'cedula' => 'required|numeric',
            'fecha_n' => 'date',
            'edad' => 'numeric',
            'telefono' => 'required|numeric',
            'email' => 'required|email',
            'trayectoria' => 'date'
           

        ];
    }
}
