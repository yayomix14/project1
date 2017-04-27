<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General3 extends Model
{
    protected $table = 'generals3';

    protected $fillable = [
    						'id',
    						'rif',
    						'fecha',
							'codigo',
							'descripcion',
							'nombre',
							'titularidad',
							'tipo',
							'telefono_r',
							'fecha_n',
							'email_r',
							'direccion',
							'municipio',
							'parroquia',
							'telefono',
							'email',
							'condicion',
							'trayectoria',
							'asociacion',
							'actual' ,
							'servicio',
							'paredes',
							'techo',
							'piso'

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
