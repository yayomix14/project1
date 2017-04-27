{!! Form::token() !!}
<div id="" class="input-group">
  <span class="input-group-addon">Fecha de Registros</span>
      {!! Form::date('fecha', null, ['class' => 'form-control','required'=>'required']) !!}
  <span class="input-group-addon">Còdigo de Registro</span>
      {!! Form::number('codigo', null, ['class' => 'form-control']) !!}
  
</div>
<div class="input-group">
    <span class="input-group-addon">Nombre</span>
      {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">Director o Representante</span>
      {!! Form::text('representante', null, ['class' => 'form-control']) !!}


</div>
<div class="input-group">
     <span class="input-group-addon">Direcciòn</span>
      {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>
<div class="input-group">
     <span class="input-group-addon">Descripciòn del Espacio</span>
      {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
 </div>
<div class="input-group">
 <span class="input-group-addon">RIF</span>
      {!! Form::text('rif', null, ['class' => 'form-control']) !!}
<span class="input-group-addon">Titularidad</span>
      {{Form::select('titularidad', ['Privada' => 'Privada', 'Publica' => 'Publica','Comunitario'=>'Comunitario','Familiar'=>'Familiar'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])}}
</div>
<div class="input-group">
    <span class="input-group-addon">Tiempo de Creada</span>
      {!! Form::date('fecha_n', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">Tipo de Colecciòǹ</span>
      {{Form::select('tipo', ['Ceramica' => 'Ceramica', 'Papel' => 'Papel','Tela'=>'Tela','Vidrio'=>'Vidrio','Madera'=>'Madera','Metal'=>'Metal','Mixta'=>'Mixta'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])}}
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
    <span class="input-group-addon">Telefono de Contacto Representante</span>
            {!! Form::number('telefono_r', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">Email de Contacto Representante</span>
            {!! Form::email('email_r', null, ['class' => 'form-control']) !!}
    </div>
<div class="input-group">
     <span class="input-group-addon">Estado Actual</span>
            {!! Form::text('actual', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">Nombre de Asociación</span>
            {!! Form::text('asociacion', null, ['class' => 'form-control']) !!}
     </div>


<div class="input-group">
    <span class="input-group-addon">Servicio</span>
    
    <span class="input-group-addon">Agua</span>  
            {!! Form::checkbox('servicio[]', 'agua') !!}
    <span class="input-group-addon">Luz</span>  
            {!! Form::checkbox('servicio[]', 'luz') !!}
    <span class="input-group-addon">Agua Servida</span>  
            {!! Form::checkbox('servicio[]', 'agua_s') !!}
    <span class="input-group-addon">Aseo Urbano</span>  
            {!! Form::checkbox('servicio[]', 'aseo') !!}

</div>


<div class="input-group">
    <span class="input-group-addon">Paredes de:</span>
          {!! Form::text('paredes', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">Techo de:</span>
          {!! Form::text('techo', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">Piso de:</span>
          {!! Form::text('piso', null, ['class' => 'form-control']) !!}
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