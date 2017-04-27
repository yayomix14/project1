@extends('layouts.default')

@section('content')
<div class="col-lg-9" style="text-align: center">
    @include('elementos.flash')
    <div class="media">
        <a class="pull-left" href="#" style="text-align: center"></a>
        <div id="tablaRegistros" class="media-body">
            <!-- Table -->
        <legend>Registro</legend>

            {!!Form::model($id,['route'=>['general1.update',$id->id],'role'=>'form','class'=>'form-horizontal','method'=>'PUT'])!!}
                @include('general1.form.form')
                {{Form::submit('Guardar',['class'=>'btn btn-primary pull-left'])}}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection