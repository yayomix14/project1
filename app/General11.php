<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General11 extends Model
{
    protected $table = 'generals11';

    protected $fillable = [
    						'id',
    						'fecha',
							'codigo',
							'desempeño',
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
							'condicion',
							'partcipante',
							'trayectoria',
							'asociacion',
							'actividad'
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
