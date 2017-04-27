<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\General5;
use App\Http\Requests\General5Request;
use \App\Municipio;
use \App\Parroquia;
use DB;
class General5Controller extends Controller
{


    public function __construct(){
        $this->middleware('auth',['only'=>['permisos','index','getParroquias','create','save','edit','update','destroy','general5_pdf']]);
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
        $querys = General5::name($request->get('nombre'))->orderBy('id','desc')->paginate(10);
        return view('/general5/index',compact('querys'));

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
        return view('/general5/create',compact('municipios', 'parroquias'));
    }

    public function save(General5Request $request){        
        $datos= new General5($request->all());
        $dato = $request->nombre;
        $querys->servicio = json_decode($querys->servicio);
        $this->auditar('Form 5 Guardo '.$dato);
        $datos->save();
        return redirect()->action('General5Controller@index')
                             ->with('msj-exito', 'Registro Guardado');
    }

    public function edit(Request $request,$id){
        $municipios = Municipio::lists('name','id');
        $querys= General5::find($id);
        $querys->servicio = json_decode($querys->servicio);
        $parroquias = Parroquia::where('id', $querys->parroquia)->lists('name','id');
        return view('/general5/edit',['id'=>$querys,'municipios'=>$municipios,'parroquias'=>$parroquias]);    
    }

    public function update(Request $request,$id){
        $querys = General5::find($id);
        $dato = $request->nombre;
        $this->auditar('Form 5 Modifico '.$dato);
        $querys->fill($request->all());
        $querys->save();
        return redirect()->action('General5Controller@index')
                             ->with('msj-exito', 'Registro Modificado');
    }

    public function destroy($id){
        $dato = General5::find($id);
        $query = $dato->nombre;
        $this->auditar('Form 5 Elimino '.$query);
        $dato->delete();
        return redirect()->action('General5Controller@index')
                             ->with('msj-exito', 'Registro Eliminado');

    }
    
    public function general5_pdf($id){
        $querys_pdf = DB::table('generals5')
            ->join('municipios', 'municipios.id', '=', 'generals5.municipio')
            ->join('parroquias', 'parroquias.id', '=', 'generals5.parroquia')
            ->select('generals5.*','parroquias.name as parroquias_nombre','municipios.name as municipios_nombre')
            ->where('generals5.id',$id)
            ->get(); 
            
        $pdf = \PDF::loadview('general5.pdf',['querys_pdf'=>$querys_pdf])->setOrientation('landscape');
        return $pdf->download('Reporte de Artes Escènicas 5.pdf');   
    }
   
}
