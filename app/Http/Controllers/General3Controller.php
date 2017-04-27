<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\General3;
use App\Http\Requests\General3Request;
use \App\Municipio;
use \App\Parroquia;
use DB;

class General3Controller extends Controller
{


    public function __construct(){
        $this->middleware('auth',['only'=>['permisos','index','getParroquias','create','save','edit','update','destroy','general3_pdf']]);
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
        $querys = General3::name($request->get('nombre'))->orderBy('id','desc')->paginate(10);
        return view('/general3/index',compact('querys'));

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
        return view('/general3/create',compact('municipios', 'parroquias'));
    }

    public function save(General3Request $request){        
        $datos = new General3($request->all());
        $dato = $request->nombre;
        $datos->servicio = json_encode($datos->servicio);
        $this->auditar('Form 3 Guardo '.$dato);
        $datos->save();
        return redirect()->action('General3Controller@index')
                             ->with('msj-exito', 'Registro Guardado');
    }

    public function edit(Request $request,$id){
        $municipios = Municipio::lists('name','id');
        $querys = General3::find($id);
        $querys->servicio = json_decode($querys->servicio);
        //$lol = $querys->servicio = json_decode($querys->servicio);
        $parroquias = Parroquia::where('id', $querys->parroquia)->lists('name','id');
        return view('/general3/edit',['id'=>$querys,'municipios'=>$municipios,'parroquias'=>$parroquias]);    
    }

    public function update(Request $request,$id){
        $querys = General3::find($id);
        $dato = $request->nombre;
        $this->auditar('Form 3 Modifico '.$dato);
        $querys->fill($request->all());
        $querys->save();
        return redirect()->action('General3Controller@index')
                             ->with('msj-exito', 'Registro Modificado');
    }

    public function destroy($id){
        $dato = General3::find($id);
        $query = $dato->nombre;
        $this->auditar('Form 3 Elimino '.$query);
        $dato->delete();
        return redirect()->action('General3Controller@index')
                             ->with('msj-exito', 'Registro Eliminado');

    }
    
    public function general3_pdf($id){
        
        $querys_pdf= DB::table('generals3')
            ->join('municipios', 'municipios.id', '=', 'generals3.municipio')
            ->join('parroquias', 'parroquias.id', '=', 'generals3.parroquia')
            ->select('generals3.*','parroquias.name as parroquias_nombre','municipios.name as municipios_nombre')
            ->where('generals3.id',$id)
            ->get(); 
            
        $pdf = \PDF::loadview('general3.pdf',['querys_pdf'=>$querys_pdf])->setOrientation('landscape');
        return $pdf->download('Reporte de Museos del Estado 3.pdf');   
    }
   
}
