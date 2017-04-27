<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\General12;
use App\Http\Requests\General12Request;
use \App\Municipio;
use \App\Parroquia;
use DB;
class General12Controller extends Controller
{


    public function __construct(){
        $this->middleware('auth',['only'=>['permisos','index','getParroquias','create','save','edit','update','destroy','general12_pdf']]);
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
        $querys = General12::name($request->get('nombre'))->orderBy('id','desc')->paginate(10);
        return view('/general12/index',compact('querys'));

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
        return view('/general12/create',compact('municipios', 'parroquias'));
    }

    public function save(General12Request $request){        
        $datos= new General12($request->all());
        $dato = $request->nombre;
        $this->auditar('Form 12 Guardo '.$dato);
        $datos->save();
        return redirect()->action('General12Controller@index')
                             ->with('msj-exito', 'Registro Guardado');
    }

    public function edit(Request $request,$id){
        $municipios = Municipio::lists('name','id');
        $querys= General12::find($id);
        $parroquias = Parroquia::where('id', $querys->parroquia)->lists('name','id');
        return view('/general12/edit',['id'=>$querys,'municipios'=>$municipios,'parroquias'=>$parroquias]);    
    }

    public function update(Request $request,$id){
        $querys = General12::find($id);
        $dato = $request->nombre;
        $this->auditar('Form 12 Modifico '.$dato);
        $querys->fill($request->all());
        $querys->save();
        return redirect()->action('General12Controller@index')
                             ->with('msj-exito', 'Registro Modificado');
    }

    public function destroy($id){
        $dato = General12::find($id);
        $query = $dato->nombre;
        $this->auditar('Form 12 Elimino '.$query);
        $dato->delete();
        return redirect()->action('General12Controller@index')
                             ->with('msj-exito', 'Registro Eliminado');

    }
    
    public function general12_pdf($id){
        
        $querys_pdf = DB::table('generals12')
            ->join('municipios', 'municipios.id', '=', 'generals12.municipio')
            ->join('parroquias', 'parroquias.id', '=', 'generals12.parroquia')
            ->select('generals12.*','parroquias.name as parroquias_nombre','municipios.name as municipios_nombre')
            ->where('generals12.id',$id)
            ->get(); 

        $pdf = \PDF::loadview('general12.pdf',['querys_pdf'=>$querys_pdf])->setOrientation('landscape');
        return $pdf->download('Reporte de Centros Audiovisuales, Televisoras y Radios 12.pdf');   
    }
   
}
