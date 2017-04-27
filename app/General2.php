<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General2 extends Model
{
    protected $table = 'generals2';

    protected $fillable = [
    						'id',
    						'fecha',
							'codigo',
							'nombre',
							'representante',
							'titularidad',
							'direccion',
							'rif',
							'objeto',
							'tipo',
							'fecha_creada',
							'estado_actual',
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
