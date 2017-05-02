@extends('layouts.default')

@section('content')

 {{-- <div class="col-lg-9" style="text-align: center">
@include('elementos.flash')
	<div class="media">
	    <div id="tablaRegistros" class="media-body well">
		    <div class="input-group">
		    	<span class="input-group-addon">Municipio</span>
			      {!!Form::select('municipio', ['L' => 'Large', 'S' => 'Small'], 'municipio',['id'=>'parroquia','class'=>'form-control upper']) !!}
			    <span class="input-group-addon">Parroquia</span>
			      {!!Form::select('parroquia', ['L' => 'Large', 'S' => 'Small'], 'parroquia',['id'=>'parroquia','class'=>'form-control upper']) !!}
			    <span class="input-group-addon">{!! Form::submit('Consultar',['class'=>'btn btn-xs']) !!}</span>
		    </div>
	     </div>
	</div>
</div>
  --}}

<div class="col-xs-9">
	@include('elementos.flash')
	<div class="well">
		<legend>Consulta de Reporte </legend>
		    <div class="input-group">
			<h4>Seleccione Municipio y Parroquia</h4>
			  <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="input-group">
				  <span class="input-group-addon">Municipio</span>
			      {!!Form::select('municipio', ['L' => 'Large', 'S' => 'Small'], 'municipio',['id'=>'parroquia','class'=>'form-control upper']) !!}
				 <span class="input-group-addon">Parroquia</span>
			      {!!Form::select('parroquia', ['L' => 'Large', 'S' => 'Small'], 'parroquia',['id'=>'parroquia','class'=>'form-control upper']) !!}
				  <span class="input-group-btn">
			        <button class="btn btn-warning btn-secondary" type="submit"><span class="glyphicon glyphicon-save-file"></span> Generar Consulta del Reporte</button>
			      </span>
				</div>
		{{Form::close()}}
	</div>
</div>

<script type="text/javascript">
  $("#municipio").change(function(event){
    $.get("/parroquias/"+event.target.value+"",function(response,municipio){
      $("#parroquia").empty();
      for(i=0; i<response.length; i++){
        $("#parroquia").append("<option value='"+response[i].id+"'> "+response[i].name+"</option>");
      };
    });
  });
</script>
@endsection