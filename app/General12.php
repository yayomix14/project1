<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General12 extends Model
{
    protected $table = 'generals12';

    protected $fillable = [
    						'id',
    						'fecha',
							'codigo',
							'nombre',
							'representante',
							'rif',
							'fecha_n',
							'direccion',
							'municipio',
							'parroquia',
							'telefono',
							'email',
							'telefono_r',
							'email_r',
							'trayectoria',
							'actual',
							'actividad',
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
