<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\General;
use App\Http\Requests\GeneralRequest;
use \App\Municipio;
use \App\Parroquia;
use DB;

class GeneralController extends Controller
{


    public function __construct(){
        $this->middleware('auth',['only'=>['permisos','index','getParroquias','create','save','edit','update','destroy','general_pdf']]);
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
        $querys = General::name($request->get('nombre'))->orderBy('id','desc')->paginate(10);
        return view('/general/index',compact('querys'));

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
        return view('/general/create',compact('municipios', 'parroquias'));
    }

    public function save(GeneralRequest $request){        
        $datos= new General($request->all());
        $dato = $request->nombre;
        $this->auditar('Form 10 Guardo '.$dato);
        $datos->save();
        return redirect()->action('GeneralController@index')
                             ->with('msj-exito', 'Registro Guardado');
    }

    public function edit(Request $request,$id){
        $municipios = Municipio::lists('name','id');
        $querys= General::find($id);
        $parroquias = Parroquia::where('id', $querys->parroquia)->lists('name','id');
        return view('/general/edit',['id'=>$querys,'municipios'=>$municipios,'parroquias'=>$parroquias]);    
    }

    public function update(Request $request,$id){
        $querys = General::find($id);
        $dato = $request->nombre;
        $this->auditar('Form 10 Modifico '.$dato);
        $querys->fill($request->all());
        $querys->save();
        return redirect()->action('GeneralController@index')
                             ->with('msj-exito', 'Registro Modificado');
    }

    public function destroy($id){
        $dato = General::find($id);
        $query = $dato->nombre;
        $this->auditar('Form 10 Elimino '.$query);
        $dato->delete();
        return redirect()->action('GeneralController@index')
                             ->with('msj-exito', 'Registro Eliminado');

    }
    
    public function general_pdf($id){
         $querys_pdf = DB::table('generals')
            ->join('municipios', 'municipios.id', '=', 'generals.municipio')
            ->join('parroquias', 'parroquias.id', '=', 'generals.parroquia')
            ->select('generals.*','parroquias.name as parroquias_nombre','municipios.name as municipios_nombre')
            ->where('generals.id',$id)
            ->get(); 

        $pdf = \PDF::loadview('general.pdf',['querys_pdf'=>$querys_pdf])->setOrientation('landscape');
        return $pdf->download('Reporte Animaciòn y Recreaciòn10.pdf');   
    }
   
}
