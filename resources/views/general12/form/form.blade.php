{!! Form::token() !!}
<div id="" class="input-group">
  <span class="input-group-addon">Fecha de Registro</span>
      {!! Form::date('fecha', null, ['class' => 'form-control','required'=>'required']) !!}
  <span class="input-group-addon">Còdigo de Registro</span>
      {!! Form::number('codigo', null, ['class' => 'form-control']) !!}
  
</div>
<div class="input-group">
    <span class="input-group-addon">Nombre</span>
      {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">Director o Representante Legal</span>
      {!! Form::text('representante', null, ['class' => 'form-control']) !!}
</div>
<div class="input-group">
    <span class="input-group-addon">RIF</span>
      {!! Form::text('rif', null, ['class' => 'form-control']) !!}
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
<span class="input-group-addon">Otro Telefono de Contacto</span>
            {!! Form::number('telefono_r', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">Otro Email de Contacto</span>
            {!! Form::email('email_r', null, ['class' => 'form-control']) !!}
</div>
<div class="input-group">
   <span class="input-group-addon">Tiempo de trayectoria</span>
          {!! Form::date('trayectoria', null, ['class' => 'form-control']) !!}
   <span class="input-group-addon">Condiciòn Actual</span>
          {!! Form::text('actual', null, ['class' => 'form-control']) !!}
</div>
<div class="input-group">
<span class="input-group-addon">Fecha de Fundada</span>
          {!! Form::date('fecha_n', null, ['class' => 'form-control']) !!}
  <span class="input-group-addon">Datos de Registro Legal:</span>
          {!! Form::text('datos', null, ['class' => 'form-control']) !!}
    
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