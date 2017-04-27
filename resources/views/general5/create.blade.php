@extends('layouts.default')

@section('content')
<div class="col-lg-9" style="text-align: center">
    @include('elementos.flash')
    <div class="media">
        <a class="pull-left" href="#" style="text-align: center"></a>
        <div id="tablaRegistros" class="media-body">
            <!-- Table -->
        <legend>Registro</legend>

            {!! Form::open(array('url' => '/general5/save')) !!}
                  @include('general5.form.form')
                  {{Form::submit('Guardar',['class'=>'btn btn-primary pull-left'])}}
            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection