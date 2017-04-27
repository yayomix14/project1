<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General1 extends Model
{
    protected $table = 'generals1';

    protected $fillable = [
    						'id',
    						'fecha',
    						'representante',
							'codigo',
							'nombre',
							'cedula',
							'lugar',
							'fecha_n',
							'edad',
							'direccion',
							'municipio',
							'parroquia',
							'telefono',
							'email',
							'oficina',
							'n_oficina',
							'email_oficina'
                		   ];

    public function scopeName($query, $name){ 
	     if (trim($name != "")) {
	       $query->where("nombre","LIKE","%$name%");
	     } 
    }  

    public function getCategoryListAttribute(){
        return $this->groups()->lists('id');
    }         		   
}
