<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General9 extends Model
{
    protected $table = 'generals9';

    protected $fillable = [
    						'id',
    						'fecha',
							'codigo',
							'nombre',
							'rif',
							'representate',
							'direccion',
							'fecha_n',
							'municipio',
							'parroquia',
							'telefono',
							'email',
							'actual',
							'telefono_r',
							'email_r',
							'trayectoria',
							'datos'
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
