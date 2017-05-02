<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReporteController extends Controller
{
    public function reporte(){
    	return view('reportes.reporte');
    }
}
