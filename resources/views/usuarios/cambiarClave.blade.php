@extends('layouts.default')

@section('content')
<div class="col-xs-9">
	@include('elementos.flash')
	{!! Form::open(['action' => ['UsuariosController@cambiarClave', $usuario['id'], $usuario['encrypted_id']], 
					'class' => 'well',
					'method' => 'PUT'])
	!!}
	<legend bgcolor="lightblue">{{ "Cambiar Clave" }}</legend>
     <div id="" class="input-group">
		<span class="input-group-addon">Clave Actual</span>
			{!! Form::password('current_password', ['class' => 'form-control']) !!}
	</div>
	<br>
    <div id="" class="input-group">
		<span class="input-group-addon">Clave</span>
			{!! Form::password('password', ['class' => 'form-control']) !!}
	</div>
	<br>
	<div id="" class="input-group">
		<span class="input-group-addon">Repita su clave</span>
			{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
	</div>
	<br>
	<div class="form-group">
    	<div class="input-group">
    		<span class="input-group-btn">
    		{!!Form::button('Limpiar Formulario', ['type' => 'reset', 'class'=>'btn btn-danger'])!!}
    		</span>
    		{!!Form::submit('Guardar', ['class'=>'btn btn-primary pull-right'])!!}
      </div>
</div>
	{!! Form::close() !!}
</div>
@endsection