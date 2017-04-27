<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\General11;
use App\Http\Requests\General11Request;
use \App\Municipio;
use \App\Parroquia;
use DB;

class General11Controller extends Controller
{


    public function __construct(){
        $this->middleware('auth',['only'=>['permisos','index','getParroquias','create','save','edit','update','destroy','general11_pdf']]);
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
        $querys = General11::name($request->get('nombre'))->orderBy('id','desc')->paginate(10);
        return view('/general11/index',compact('querys'));

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
        return view('/general11/create',compact('municipios', 'parroquias'));
    }

    public function save(General11Request $request){        
        $datos= new General11($request->all());
        $dato = $request->nombre;
        $this->auditar('Form 11 Guardo '.$dato);
        $datos->save();
        return redirect()->action('General11Controller@index')
                             ->with('msj-exito', 'Registro Guardado');
    }

    public function edit(Request $request,$id){
        $municipios = Municipio::lists('name','id');
        $querys= General11::find($id);
        $parroquias = Parroquia::where('id', $querys->parroquia)->lists('name','id');
        return view('/general11/edit',['id'=>$querys,'municipios'=>$municipios,'parroquias'=>$parroquias]);    
    }

    public function update(Request $request,$id){
        $querys = General11::find($id);
        $dato = $request->nombre;
        $this->auditar('Form 11 Modifico '.$dato);
        $querys->fill($request->all());
        $querys->save();
        return redirect()->action('General11Controller@index')
                             ->with('msj-exito', 'Registro Modificado');
    }

    public function destroy($id){
        $dato = General11::find($id);
        $query = $dato->nombre;
        $this->auditar('Form 11 Elimino '.$query);
        $dato->delete();
        return redirect()->action('General11Controller@index')
                             ->with('msj-exito', 'Registro Eliminado');

    }
    
    public function general11_pdf($id){
       
        $querys_pdf = DB::table('generals11')
            ->join('municipios', 'municipios.id', '=', 'generals11.municipio')
            ->join('parroquias', 'parroquias.id', '=', 'generals11.parroquia')
            ->select('generals11.*','parroquias.name as parroquias_nombre','municipios.name as municipios_nombre')
            ->where('generals11.id',$id)
            ->get(); 

        $pdf = \PDF::loadview('general11.pdf',['querys_pdf'=>$querys_pdf])->setOrientation('landscape');
        return $pdf->download('Reporte de Saberes Tradicionales 11.pdf');   
    }
   
}
