<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General7 extends Model
{
    protected $table = 'generals7';

    protected $fillable = [
    						'id',
    						'fecha',
							'codigo',
							'diciplina',
							'desempeño',
							'categoria',
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
							'tallerista',
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
