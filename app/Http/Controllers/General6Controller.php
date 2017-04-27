<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\General6;
use App\Http\Requests\General6Request;
use \App\Municipio;
use \App\Parroquia;
use DB;
class General6Controller extends Controller
{


    public function __construct(){
        $this->middleware('auth',['only'=>['permisos','index','getParroquias','create','save','edit','update','destroy','general6_pdf']]);
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
        $querys = General6::name($request->get('nombre'))->orderBy('id','desc')->paginate(10);
        return view('/general6/index',compact('querys'));

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
        return view('/general6/create',compact('municipios', 'parroquias'));
    }

    public function save(General6Request $request){        
        $datos= new General6($request->all());
        $dato = $request->nombre;
        $this->auditar('Form 6 Guardo '.$dato);
        $datos->save();
        return redirect()->action('General6Controller@index')
                             ->with('msj-exito', 'Registro Guardado');
    }

    public function edit(Request $request,$id){
        $municipios = Municipio::lists('name','id');
        $querys= General6::find($id);
        $parroquias = Parroquia::where('id', $querys->parroquia)->lists('name','id');
        return view('/general6/edit',['id'=>$querys,'municipios'=>$municipios,'parroquias'=>$parroquias]);    
    }

    public function update(Request $request,$id){
        $querys = General6::find($id);
        $dato = $request->nombre;
        $this->auditar('Form 6 Modifico '.$dato);
        $querys->fill($request->all());
        $querys->save();
        return redirect()->action('General6Controller@index')
                             ->with('msj-exito', 'Registro Modificado');
    }

    public function destroy($id){
        $dato = General6::find($id);
        $query = $dato->nombre;
        $this->auditar('Form 6 Elimino '.$query);
        $dato->delete();
        return redirect()->action('General6Controller@index')
                             ->with('msj-exito', 'Registro Eliminado');

    }
    
    public function general6_pdf($id){
         $querys_pdf = DB::table('generals6')
            ->join('municipios', 'municipios.id', '=', 'generals6.municipio')
            ->join('parroquias', 'parroquias.id', '=', 'generals6.parroquia')
            ->select('generals6.*','parroquias.name as parroquias_nombre','municipios.name as municipios_nombre')
            ->where('generals6.id',$id)
            ->get(); 
        //dd($querys_pdf);
        
        $pdf = \PDF::loadview('general6.pdf',['querys_pdf'=>$querys_pdf])->setOrientation('landscape');
        return $pdf->download('Reporte de Artesan@ 6.pdf');   
    }
   
} 
