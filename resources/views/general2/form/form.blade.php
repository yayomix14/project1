{!! Form::token() !!}
<div id="" class="input-group">
  <span class="input-group-addon">Fecha de Registro</span>
      {!! Form::date('fecha', null, ['class' => 'form-control','required'=>'required']) !!}
  <span class="input-group-addon">Código de Registro</span>
      {!! Form::number('codigo', null, ['class' => 'form-control']) !!}
  
</div>
<div class="input-group">
<span class="input-group-addon">Tituralidad</span>
<span class="input-group-addon">Publica</span>  
            {!! Form::radio('titularidad', 'Publica', ['class' => 'form-control']) !!}
<span class="input-group-addon">Privada</span>  
            {!! Form::radio('titularidad', 'Privada', ['class' => 'form-control']) !!}
<span class="input-group-addon">RIF</span>
      {!! Form::text('rif', null, ['class' => 'form-control']) !!}
</div>           
<div class="input-group">
<span class="input-group-addon">Objeto</span>
      {!! Form::text('objeto', null, ['class' => 'form-control']) !!}
<span class="input-group-addon">Director o Representante Legal</span>
      {!! Form::text('representante', null, ['class' => 'form-control']) !!}
</div>
<div class="input-group">
  <span class="input-group-addon">Tipo</span>
      {{Form::select('tipo', ['Casa de Cultura' => 'Casa de Cultura', 'Complejo Cultural' => 'Complejo Cultural','Ateneo'=>'Ateneo','Casa del Artesano'=>'Casa del Artesano','Biblioteca'=>'Biblioteca','Teatro'=>'Teatro','Centro Cultural'=>'Centro Cultural'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])}} 
                      
</div>
<div class="input-group">
    <span class="input-group-addon">Nombre</span>
      {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    
</div>
<div class="input-group">
    <span class="input-group-addon">Tiempo de Creada</span>
      {!! Form::date('fecha_creada', null, ['class' => 'form-control']) !!}
</div>
<div class="input-group">
    <span class="input-group-addon">Dirección</span>
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
    <span class="input-group-addon">Estado Actual</span>
            {!! Form::text('estado_actual', null, ['class' => 'form-control']) !!}   
</div>
<div class="input-group">
         <span class="input-group-addon">Servicio</span>   
    <span class="input-group-addon">Agua</span>  
            {!! Form::checkbox('servicio[]', 'agua') !!}
    <span class="input-group-addon">Luz</span>  
            {!! Form::checkbox('servicio[]', 'luz') !!}
    <span class="input-group-addon">Agua Servida</span>  
            {!! Form::checkbox('servicio[]', 'agua_servida') !!}
    <span class="input-group-addon">Aseo Urbano</span>  
            {!! Form::checkbox('servicio[]', 'aseo_urbano') !!}
   
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