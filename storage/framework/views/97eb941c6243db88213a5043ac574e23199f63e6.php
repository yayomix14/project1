<?php echo Form::token(); ?>

<div id="" class="input-group">
  <span class="input-group-addon">Fecha de Registro</span>
      <?php echo Form::date('fecha', null, ['class' => 'form-control','required'=>'required']); ?>

  <span class="input-group-addon">Còdigo de Registro</span>
      <?php echo Form::number('codigo', null, ['class' => 'form-control']); ?>

  
</div>
<div class="input-group">
  <span class="input-group-addon">Disciplina</span>
      <?php echo e(Form::select('diciplina', ['Artes Escénicas' => 'Artes Escénicas', 'Artesan@' => 'Artesan@','Artes Visuales'=>'Artes Visuales','Expresiones Literarias'=>'Expresiones Literarias','Animación y Recreación'=>'Animación y Recreación','Otras'=>'Otras'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])); ?> 
  <span class="input-group-addon">Tipo de Arte Escènica</span>
      <?php echo e(Form::select('tipo', ['Teatro' => 'Teatro', 'Musica' => 'Musica','Danza'=>'Danza'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])); ?> 
  <span class="input-group-addon">Categoria</span>
      <?php echo e(Form::select('categoria', ['Tradicional' => 'Tradicional', 'Contemporáneo' => 'Contemporáneo','Clasica'=>'Clasica','Moderna'=>'Moderna','Emergente'=>'Emergente'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])); ?>                      
</div>
<div class="input-group">
    <span class="input-group-addon">Nombres y Apellidos</span>
      <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

    <span class="input-group-addon">C.I</span>
      <?php echo Form::number('cedula', null, ['class' => 'form-control']); ?>

</div>
<div class="input-group">
    <span class="input-group-addon">Lugar de Nacimiento</span>
      <?php echo Form::text('lugar', null, ['class' => 'form-control']); ?>

    <span class="input-group-addon">Fecha de Nacimiento</span>
      <?php echo Form::date('fecha_n', null, ['class' => 'form-control']); ?>

    <span class="input-group-addon">Edad</span>
      <?php echo Form::number('edad', null, ['class' => 'form-control']); ?>

</div>
<div class="input-group">
    <span class="input-group-addon">Direcciòn</span>
      <?php echo Form::text('direccion', null, ['class' => 'form-control']); ?>

</div>
<div class="input-group">
    <span class="input-group-addon">Municipio</span>
      <?php echo Form::select('municipio',$municipios,null,['id'=>'municipio','class'=>'form-control upper','placeholder'=>'Selecciona']); ?>

    <span class="input-group-addon">Parroquia</span>
      <?php echo Form::select('parroquia',$parroquias,null,['id'=>'parroquia','class'=>'form-control upper']); ?>

</div>
<div class="input-group">
    <span class="input-group-addon">Telefono</span>
            <?php echo Form::number('telefono', null, ['class' => 'form-control']); ?>

    <span class="input-group-addon">Email</span>
            <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

     <span class="input-group-addon">Condicion Actual</span>
            <?php echo Form::text('condicion', null, ['class' => 'form-control']); ?>

     <span class="input-group-addon">Participante de Asociación</span>
     <span class="input-group-addon">Si</span>  
            <?php echo Form::radio('partcipante', 'si', ['class' => 'form-control']); ?>

     <span class="input-group-addon">No</span>  
            <?php echo Form::radio('partcipante', 'no', ['class' => 'form-control']); ?>

</div>                
<div class="input-group">
   <span class="input-group-addon">Tiempo de trayectoria</span>
          <?php echo Form::date('trayectoria', null, ['class' => 'form-control']); ?>

   <span class="input-group-addon">Nombre de la Asociacion</span>
          <?php echo Form::text('asociacion', null, ['class' => 'form-control']); ?>

</div>
<div class="input-group">
<span class="input-group-addon">Tallerista</span>
     <span class="input-group-addon">Si</span>  
            <?php echo Form::radio('tallerista', 'si', ['class' => 'form-control']); ?>

     <span class="input-group-addon">No</span>  
            <?php echo Form::radio('tallerista', 'no', ['class' => 'form-control']); ?>


  <span class="input-group-addon">Especificación de la actividad que realiza:</span>
          <?php echo Form::text('actividad', null, ['class' => 'form-control']); ?>

    
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