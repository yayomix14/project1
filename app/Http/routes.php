<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => ['web']], function () {
	Route::match(['get', 'post'], '/login', 'AutenticacionController@login');

	Route::get('/acceso-negado', ['middleware' => ['BlockIp'], 'as' => 'bloqueo', function () {
	    return view('autenticacion.bloqueo');
	}]);
});

Route::group(['middleware' => ['web', 'authGroup']], function () {

	Route::get('/', ['as' => 'index', function () {
		    return view('autenticacion.index');
	}]);
//-----------Autenticacion Controller----------------------
	Route::get('/salir', 'AutenticacionController@logout');

//-----------Auditoria Controller--------------------------
	Route::get('/auditoria/listar', 'AuditoriaController@listar');
	Route::get('/auditoria/monitoreo-ip', 'AuditoriaController@monitoreoIp');
	Route::get('/auditoria/desbloquear-ip/{ip}', 'AuditoriaController@desbloquearIp');

//-----------Usuarios Controller---------------------------
	Route::get('/usuarios/listar', 'UsuariosController@listar');
	Route::match(['get', 'post'], '/usuarios/registrar', 'UsuariosController@registrar');
	Route::match(['get', 'put'], '/usuarios/actualizar/{id}/{encrypted_id}', 'UsuariosController@modificar');
	Route::delete('/usuarios/eliminar/{id}/{encrypted_id}', 'UsuariosController@eliminar');
	Route::match(['get', 'put'], '/usuarios/cambiar-clave/{id}/{encrypted_id}', 'UsuariosController@cambiarClave');
	Route::get('/usuarios/cambiar-estatus/{id}/{encrypted_id}', 'UsuariosController@cambiarEstatus');

//----------FORMULARIO 1---------------------------------//
	Route::get('/general1','General1Controller@index');
	Route::get('/general1/create','General1Controller@create');
	Route::post('/general1/save','General1Controller@save');
	Route::get('/general1/edit/{id}','General1Controller@edit');
	Route::get('/general1/destroy/{id}','General1Controller@destroy');
	Route::get('/general1_pdf/{id}','General1Controller@general1_pdf');
	Route::put('/general1/update/{id}', ['uses' => 'General1Controller@update','as'   => 'general1.update',]);
//---------FORMULARIO 2----------------------------------//
	Route::get('/general2','General2Controller@index');
	Route::get('/general2/create','General2Controller@create');
	Route::post('/general2/save','General2Controller@save');
	Route::get('/general2/edit/{id}','General2Controller@edit');
	Route::get('/general2/destroy/{id}','General2Controller@destroy');
	Route::get('/general2_pdf/{id}','General2Controller@general2_pdf');
	Route::put('/general2/update/{id}', ['uses' => 'General2Controller@update','as'   => 'general2.update',]);
//---------FORMULARIO 3----------------------------------//
	Route::get('/general3','General3Controller@index');
	Route::get('/general3/create','General3Controller@create');
	Route::post('/general3/save','General3Controller@save');
	Route::get('/general3/edit/{id}','General3Controller@edit');
	Route::get('/general3/destroy/{id}','General3Controller@destroy');
	Route::get('/general3_pdf/{id}','General3Controller@general3_pdf');
	Route::put('/general3/update/{id}', ['uses' => 'General3Controller@update','as'   => 'general3.update',]);
//---------FORMULARIO 4----------------------------------//
	Route::get('/general4','General4Controller@index');
	Route::get('/general4/create','General4Controller@create');
	Route::post('/general4/save','General4Controller@save');
	Route::get('/general4/edit/{id}','General4Controller@edit');
	Route::get('/general4/destroy/{id}','General4Controller@destroy');
	Route::get('/general4_pdf/{id}','General4Controller@general4_pdf');
	Route::put('/general4/update/{id}', ['uses' => 'General4Controller@update','as'   => 'general4.update',]);
//---------FORMULARIO 5----------------------------------//
	Route::get('/general5','General5Controller@index');
	Route::get('/general5/create','General5Controller@create');
	Route::post('/general5/save','General5Controller@save');
	Route::get('/general5/edit/{id}','General5Controller@edit');
	Route::get('/general5/destroy/{id}','General5Controller@destroy');
	Route::get('/general5_pdf/{id}','General5Controller@general5_pdf');
	Route::put('/general5/update/{id}', ['uses' => 'General5Controller@update','as'   => 'general5.update',]);
//---------FORMULARIO 6----------------------------------//
	Route::get('/general6','General6Controller@index');
	Route::get('/general6/create','General6Controller@create');
	Route::post('/general6/save','General6Controller@save');
	Route::get('/general6/edit/{id}','General6Controller@edit');
	Route::get('/general6/destroy/{id}','General6Controller@destroy');
	Route::get('/general6_pdf/{id}','General6Controller@general6_pdf');
	Route::put('/general6/update/{id}', ['uses' => 'General6Controller@update','as'   => 'general6.update',]);
//---------FORMULARIO 7----------------------------------//
	Route::get('/general7','General7Controller@index');
	Route::get('/general7/create','General7Controller@create');
	Route::post('/general7/save','General7Controller@save');
	Route::get('/general7/edit/{id}','General7Controller@edit');
	Route::get('/general7/destroy/{id}','General7Controller@destroy');
	Route::get('/general7_pdf/{id}','General7Controller@general7_pdf');
	Route::put('/general7/update/{id}', ['uses' => 'General7Controller@update','as'   => 'general7.update',]);
	//---------FORMULARIO 8----------------------------------//
	Route::get('/general8','General8Controller@index');
	Route::get('/general8/create','General8Controller@create');
	Route::post('/general8/save','General8Controller@save');
	Route::get('/general8/edit/{id}','General8Controller@edit');
	Route::get('/general8/destroy/{id}','General8Controller@destroy');
	Route::get('/general8_pdf/{id}','General8Controller@general8_pdf');
	Route::put('/general8/update/{id}', ['uses' => 'General8Controller@update','as'   => 'general8.update',]);
		//---------FORMULARIO 9----------------------------------//
	Route::get('/general9','General9Controller@index');
	Route::get('/general9/create','General9Controller@create');
	Route::post('/general9/save','General9Controller@save');
	Route::get('/general9/edit/{id}','General9Controller@edit');
	Route::get('/general9/destroy/{id}','General9Controller@destroy');
	Route::get('/general9_pdf/{id}','General9Controller@general9_pdf');
	Route::put('/general9/update/{id}', ['uses' => 'General9Controller@update','as'   => 'general9.update',]);
			//---------FORMULARIO 11----------------------------------//
	Route::get('/general11','General11Controller@index');
	Route::get('/general11/create','General11Controller@create');
	Route::post('/general11/save','General11Controller@save');
	Route::get('/general11/edit/{id}','General11Controller@edit');
	Route::get('/general11/destroy/{id}','General11Controller@destroy');
	Route::get('/general11_pdf/{id}','General11Controller@general11_pdf');
	Route::put('/general11/update/{id}', ['uses' => 'General11Controller@update','as'   => 'general11.update',]);
		//---------FORMULARIO 12----------------------------------//
	Route::get('/general12','General12Controller@index');
	Route::get('/general12/create','General12Controller@create');
	Route::post('/general12/save','General12Controller@save');
	Route::get('/general12/edit/{id}','General12Controller@edit');
	Route::get('/general12/destroy/{id}','General12Controller@destroy');
	Route::get('/general12_pdf/{id}','General12Controller@general12_pdf');
	Route::put('/general12/update/{id}', ['uses' => 'General12Controller@update','as'   => 'general12.update',]);




	//-----------Rutas Select Municipio Parroquias---------------------------
	Route::get('parroquias/{id}','General1Controller@getParroquias');


//----------FORMULARIO 10---------------------------------//
	Route::get('/general','GeneralController@index');
	Route::get('/general/create','GeneralController@create');
	Route::post('/general/save','GeneralController@save');
	Route::get('/general/edit/{id}','GeneralController@edit');
	Route::get('/general/destroy/{id}','GeneralController@destroy');
	Route::get('/general_pdf/{id}','GeneralController@general_pdf');
	Route::put('/general/update/{id}', ['uses' => 'GeneralController@update','as'   => 'general.update',]);

	//-----------Rutas Select Municipio Parroquias---------------------------
	Route::get('parroquias/{id}','GeneralController@getParroquias');

	//-----------Rutas Select Municipio Parroquias---------------------------
	Route::get('/reporte','ReporteController@reporte');



});
