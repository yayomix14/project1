{!! Form::token() !!}
<div id="" class="input-group">
  <span class="input-group-addon">Fecha de Registro</span>
      {!! Form::date('fecha', null, ['class' => 'form-control','required'=>'required']) !!}
  <span class="input-group-addon">Còdigo de Registro</span>
      {!! Form::number('codigo', null, ['class' => 'form-control']) !!}  
</div>
<div class="input-group">
  <span class="input-group-addon">Representante del Municipio</span>
      {!! Form::text('representante', null, ['class' => 'form-control']) !!}
</div>

<div class="input-group">
    <span class="input-group-addon">Nombre y Apellido</span>
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
<span class="input-group-addon">Direcciòn de Oficina</span>
            {!! Form::text('oficina', null, ['class' => 'form-control']) !!}
    </div>
<div class="input-group">
<span class="input-group-addon">Telefono de la Oficina</span>
            {!! Form::number('n_oficina', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">Email de la Oficina</span>
            {!! Form::email('email_oficina', null, ['class' => 'form-control']) !!}
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