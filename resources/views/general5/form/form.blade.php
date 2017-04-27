{!! Form::token() !!}
<div id="" class="input-group">
  <span class="input-group-addon">Fecha de Registro</span>
      {!! Form::date('fecha', null, ['class' => 'form-control','required'=>'required']) !!}
  <span class="input-group-addon">Còdigo de Registro</span>
      {!! Form::number('codigo', null, ['class' => 'form-control']) !!}
  
</div>
<div class="input-group">
  <span class="input-group-addon">Disciplina</span>
      {{Form::select('diciplina', ['Artes Escénicas' => 'Artes Escénicas', 'Artesano' => 'Artesano','Artes Visuales'=>'Artes Visuales','Expresiones Literarias'=>'Expresiones Literarias','Animación y Recreación'=>'Animación y Recreación','Otras'=>'Otras'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])}} 
      <span class="input-group-addon">Tipo</span>
      {{Form::select('Tipo', ['Teatro' => 'Teatro', 'Musica' => 'Musica','Danza'=>'Danza'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])}} 
  <span class="input-group-addon">Categoria</span>
      {{Form::select('categoria', ['Tradicional' => 'Tradicional', 'Contemporáneo' => 'Contemporáneo','Clasica'=>'Clasica','Moderna'=>'Moderna','Emergente'=>'Emergente'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])}}                      
</div>
<div class="input-group">
    <span class="input-group-addon">Nombres y Apellidos</span>
      {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">C.I</span>
      {!! Form::number('cedula', null, ['class' => 'form-control']) !!}
</div>
<div class="input-group">
    <span class="input-group-addon">Lugar de Nacimiento</span>
      {!! Form::text('lugar', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">Fecha de Nacimiento</span>
      {!! Form::date('fecha_n', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">Edad</span>
      {!! Form::number('edad', null, ['class' => 'form-control']) !!}
</div>
<div class="input-group">
    <span class="input-group-addon">Direcciòn</span>
      {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>
<div class="input-group">
    <span class="input-group-addon">Municipio</span>
      {!!Form::select('municipio',$municipios,null,['id'=>'municipio','class'=>'form-control upper','placeholder'=>'Selecciona']) !!}
    <span class="input-group-addon">Parroquia</span>
      {!!Form::select('parroquia',$parroquias,null,['id'=>'parroquia','class'=>'form-control upper']) !!}
</div>
<div class="input-group">
    <span class="input-group-addon">Telefono</span>
            {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">Email</span>
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>                
<div class="input-group">
     <span class="input-group-addon">Condicion Actual</span>
            {!! Form::text('condicion', null, ['class' => 'form-control']) !!}
     <span class="input-group-addon">Participante de Asociación</span>
     <span class="input-group-addon">Si</span>  
            {!! Form::radio('partcipante', 'si', ['class' => 'form-control']) !!}
     <span class="input-group-addon">No</span>  
            {!! Form::radio('partcipante', 'no', ['class' => 'form-control']) !!}
</div>                
<div class="input-group">
   <span class="input-group-addon">Tiempo de trayectoria</span>
          {!! Form::date('trayectoria', null, ['class' => 'form-control']) !!}
   <span class="input-group-addon">Nombre de la Asociacion</span>
          {!! Form::text('asociacion', null, ['class' => 'form-control']) !!}
</div>
<div class="input-group">
 <span class="input-group-addon">Tallerista</span>
     <span class="input-group-addon">Si</span>  
            {!! Form::radio('tallerista', 'si', ['class' => 'form-control']) !!}
     <span class="input-group-addon">No</span>  
            {!! Form::radio('tallerista', 'no', ['class' => 'form-control']) !!}
  <span class="input-group-addon">Especificación de la actividad que realiza:</span>
          {!! Form::text('actividad', null, ['class' => 'form-control']) !!}
    
</div>
  <br>
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