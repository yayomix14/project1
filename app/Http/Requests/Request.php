<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Crypt;

abstract class Request extends FormRequest
{
    public function checkId()
    {
    	$encriptado = strtr($this->segment(4), '-_,', '+/=');
        $base64Decode = base64_decode( $encriptado );
        try {
        	$decrypted = Crypt::decrypt($base64Decode);
        } catch (Exception  $e) {
        	return false;
        }
        
        if($this->segment(3) == $decrypted)
            return true;
        else
            return false;
    }
}
