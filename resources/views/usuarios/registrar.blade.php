@extends('layouts.default')

@section('content')
<div class="col-xs-9">
	@include('elementos.flash')
	{!! Form::open(['action' => 'UsuariosController@registrar', 
					'class' => 'well',
					'method' => 'POST']) 
	!!}
	<legend bgcolor="lightblue">{{ "Registrar Usuario" }}</legend>
    	@include('usuarios.formularios.formUsuario')
	{!! Form::close() !!}
</div>
@endsection