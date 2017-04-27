<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\General1;
use App\Http\Requests\General1Request;
use \App\Municipio;
use \App\Parroquia;
use DB;

class General1Controller extends Controller
{


    public function __construct(){
        $this->middleware('auth',['only'=>['permisos','index','getParroquias','create','save','edit','update','destroy','general1_pdf']]);
    }

    public function permisos()
	{
		$metodo = explode('@', $this->actionName())[1];
        $metodosPermitidos = ['index'];

		if(auth()->user()->tipo == 'usuario')
		{
			if(!in_array($metodo, $metodosPermitidos))
            {
                return true;
            }
		}

        return false;
	}

    public function index(Request $request){
        $querys = General1::name($request->get('nombre'))->orderBy('id','desc')->paginate(10);
        return view('/general1/index',compact('querys'));

    }

    public function getParroquias(Request $request, $id){
       if ($request->ajax()) {
           $parroquias = Parroquia::parroquias($id);
           return response()->json($parroquias);
       }
    }

    public function create(){
        $municipios = Municipio::lists('name','id');
        $parroquias= ['placeholder' => 'Seleccione'];
        return view('/general1/create',compact('municipios', 'parroquias'));
    }

    public function save(General1Request $request){        
        $datos= new General1($request->all());
        $dato = $request->nombre;
        $querys->servicio = json_decode($querys->servicio);
        $this->auditar('Form 1 Guardo '.$dato);
        $datos->save();
        return redirect()->action('General1Controller@index')
                             ->with('msj-exito', 'Registro Guardado');
    }

    public function edit(Request $request,$id){
        $municipios = Municipio::lists('name','id');
        $querys= General1::find($id);
        $querys->servicio = json_decode($querys->servicio);
        $parroquias = Parroquia::where('id', $querys->parroquia)->lists('name','id');
        return view('/general1/edit',['id'=>$querys,'municipios'=>$municipios,'parroquias'=>$parroquias]);    
    }

    public function update(Request $request,$id){
        $querys = General1::find($id);
        $dato = $request->nombre;
        $this->auditar('Form 1 Modifico '.$dato);
        $querys->fill($request->all());
        $querys->save();
        return redirect()->action('General1Controller@index')
                             ->with('msj-exito', 'Registro Modificado');
    }

    public function destroy($id){
        $dato = General1::find($id);
        $query = $dato->nombre;
        $this->auditar('Form 1 Elimino '.$query);
        $dato->delete();
        return redirect()->action('General1Controller@index')
                             ->with('msj-exito', 'Registro Eliminado');

    }
    
    public function general1_pdf($id){

        $querys_pdf = DB::table('generals1')
            ->join('municipios', 'municipios.id', '=', 'generals1.municipio')
            ->join('parroquias', 'parroquias.id', '=', 'generals1.parroquia')
            ->select('generals1.*','parroquias.name as parroquias_nombre','municipios.name as municipios_nombre')
            ->where('generals1.id',$id)
            ->get(); 
            //dd($querys_pdf);


        $pdf = \PDF::loadview('general1.pdf',['querys_pdf'=>$querys_pdf])->setOrientation('landscape');
        return $pdf->download('Reporte de Coordinadores Municipales1.pdf');   
    }
   
}
