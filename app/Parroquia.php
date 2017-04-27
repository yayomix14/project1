<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    protected $table = 'parroquias';

    protected $fillable = ['name','municipio_id'];

    public static function Parroquias($id){
    	return Parroquia::where('municipio_id','=',$id)->get();
    }
}
