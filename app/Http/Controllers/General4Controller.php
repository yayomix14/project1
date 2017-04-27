<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\General4;
use App\Http\Requests\General4Request;
use \App\Municipio;
use \App\Parroquia;
use DB;

class General4Controller extends Controller
{


    public function __construct(){
        $this->middleware('auth',['only'=>['permisos','index','getParroquias','create','save','edit','update','destroy','general4_pdf']]);
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
        $querys = General4::name($request->get('nombre'))->orderBy('id','desc')->paginate(10);
        return view('/general4/index',compact('querys'));

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
        return view('/general4/create',compact('municipios', 'parroquias'));
    }

    public function save(General4Request $request){        
        $datos= new General4($request->all());
        $dato = $request->nombre;
        $this->auditar('Form 4 Guardo '.$dato);
        $datos->save();
        return redirect()->action('General4Controller@index')
                             ->with('msj-exito', 'Registro Guardado');
    }

    public function edit(Request $request,$id){
        $municipios = Municipio::lists('name','id');
        $querys= General4::find($id);
        $parroquias = Parroquia::where('id', $querys->parroquia)->lists('name','id');
        return view('/general4/edit',['id'=>$querys,'municipios'=>$municipios,'parroquias'=>$parroquias]);    
    }

    public function update(Request $request,$id){
        $querys = General4::find($id);
        $dato = $request->nombre;
        $this->auditar('Form 4 Modifico '.$dato);
        $querys->fill($request->all());
        $querys->save();
        return redirect()->action('General4Controller@index')
                             ->with('msj-exito', 'Registro Modificado');
    }

    public function destroy($id){
        $dato = General4::find($id);
        $query = $dato->nombre;
        $this->auditar('Form 4 Elimino '.$query);
        $dato->delete();
        return redirect()->action('General4Controller@index')
                             ->with('msj-exito', 'Registro Eliminado');

    }
    
    public function general4_pdf($id){
        $querys_pdf = DB::table('generals4')
            ->join('municipios', 'municipios.id', '=', 'generals4.municipio')
            ->join('parroquias', 'parroquias.id', '=', 'generals4.parroquia')
            ->select('generals4.*','parroquias.name as parroquias_nombre','municipios.name as municipios_nombre')
            ->where('generals4.id',$id)
            ->get(); 

        $pdf = \PDF::loadview('general4.pdf',['querys_pdf'=>$querys_pdf])->setOrientation('landscape');
        return $pdf->download('Reporte de Asosiacines y Fundaciones 4.pdf');   
    }
   
}
