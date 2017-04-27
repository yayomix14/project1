<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General4 extends Model
{
    protected $table = 'generals4';

    protected $fillable = [
    						'id',
    						'fecha',
							'codigo',
							'diciplina',
							'categoria',
							'objeto',
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
							'dato',
							'fundada'
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
