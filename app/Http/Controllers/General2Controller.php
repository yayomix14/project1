<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\General2;
use App\Http\Requests\General2Request;
use \App\Municipio;
use \App\Parroquia;
use DB;

class General2Controller extends Controller
{


    public function __construct(){
        $this->middleware('auth',['only'=>['permisos','index','getParroquias','create','save','edit','update','destroy','general2_pdf']]);
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
        $querys = General2::name($request->get('nombre'))->orderBy('id','desc')->paginate(10);
        return view('/general2/index',compact('querys'));

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
        return view('/general2/create',compact('municipios', 'parroquias'));
    }

    public function save(General2Request $request){        
        $datos= new General2($request->all());
        $dato = $request->nombre;
        $datos->servicio = json_encode($datos->servicio);
        $this->auditar('Form 2 Guardo '.$dato);
        $datos->save();
        return redirect()->action('General2Controller@index')
                             ->with('msj-exito', 'Registro Guardado');
    }

    public function edit(Request $request,$id){
        $municipios = Municipio::lists('name','id');
        $querys= General2::find($id);
        $querys->servicio = json_decode($querys->servicio);
        $parroquias = Parroquia::where('id', $querys->parroquia)->lists('name','id');
        return view('/general2/edit',['id'=>$querys,'municipios'=>$municipios,'parroquias'=>$parroquias]);    
    }

    public function update(Request $request,$id){
        $querys = General2::find($id);
        $dato = $request->nombre;
        $this->auditar('Form 2 Modifico '.$dato);
        $querys->fill($request->all());
        $querys->save();
        return redirect()->action('General2Controller@index')
                             ->with('msj-exito', 'Registro Modificado');
    }

    public function destroy($id){
        $dato = General2::find($id);
        $query = $dato->nombre;
        $this->auditar('Form 2 Elimino '.$query);
        $dato->delete();
        return redirect()->action('General2Controller@index')
                             ->with('msj-exito', 'Registro Eliminado');

    }
    
     public function general2_pdf($id){
        
        $querys_pdf= DB::table('generals2')
            ->join('municipios', 'municipios.id', '=', 'generals2.municipio')
            ->join('parroquias', 'parroquias.id', '=', 'generals2.parroquia')
            ->select('generals2.*','parroquias.name as parroquias_nombre','municipios.name as municipios_nombre')
            ->where('generals2.id',$id)
            ->get(); 
            
        $pdf = \PDF::loadview('general3.pdf',['querys_pdf'=>$querys_pdf])->setOrientation('landscape');
        return $pdf->download('Reporte de Infraestructura de Activaciòn Cultural 2.pdf');   
    }
   
}
