@extends('layouts.default')

@section('content')
<div class='row'>
		{!! Form::open(['url' => '/login',
						'class' => 'form-signin', 
						'method' => 'POST']) 
		!!}
		<div class="container">
		<h3 class="form-signin-heading">Iniciar Sesión</h3>
			{{ csrf_field() }}
			{!! Form::text('username', null, ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'usuario']) !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'contraseña']) !!}

			{!!Form::submit('Iniciar Sesión', ['class'=>'btn btn-lg btn-primary btn-block success'])!!}
		
			{!! Form::close() !!}
			<br>
			@include('elementos.msj-error')
		</div>
		
		<br>
</div>
@endsection