<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class General2Request extends Request
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
            'fecha' => 'date',
            'codigo' => 'numeric',
            'fecha_n' => 'date',
            'telefono' => 'numeric',
            'email' => 'email',
            'trayectoria' => 'date'
           

        ];
    }
}
