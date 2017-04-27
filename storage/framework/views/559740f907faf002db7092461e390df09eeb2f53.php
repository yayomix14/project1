<?php echo Form::token(); ?>

<div id="" class="input-group">
  <span class="input-group-addon">Fecha de Registro</span>
      <?php echo Form::date('fecha', null, ['class' => 'form-control','required'=>'required']); ?>

  <span class="input-group-addon">Còdigo de Registro</span>
      <?php echo Form::number('codigo', null, ['class' => 'form-control']); ?>

  
</div>
<div class="input-group">
    <span class="input-group-addon">Nombre</span>
      <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

    <span class="input-group-addon">Director o Representante Legal</span>
      <?php echo Form::text('representante', null, ['class' => 'form-control']); ?>

</div>
<div class="input-group">
    <span class="input-group-addon">RIF</span>
      <?php echo Form::text('rif', null, ['class' => 'form-control']); ?>

    <span class="input-group-addon">Disciplina</span>
      <?php echo e(Form::select('diciplina', ['Artes Escénicas(Teatro, Danza y Música)' => 'Artes Escénicas(Teatro, Danza y Música)', 'Artesano' => 'Artesano','Artes Visuales'=> 'Artes Visuales','Expresiones Literarias'=>'Expresiones Literarias','Animación y Recreación'=>'Animación y Recreación','Actividades Deportivas Tradicionales'=>'Actividades Deportivas Tradicionales','Otras'=>'Otras'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])); ?> 
</div>
<div class="input-group">

  <span class="input-group-addon">Categoria</span>
      <?php echo e(Form::select('categoria', ['Tradicional' => 'Tradicional', 'Contemporáneo' => 'Contemporáneo','Clasica'=>'Clasica','Emergente'=>'Emergente'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])); ?>                      
<span class="input-group-addon">Objeto</span>
      <?php echo Form::text('Objeto', null, ['class' => 'form-control']); ?>

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

   <span class="input-group-addon">Fecha de Fundada</span>
          <?php echo Form::date('fundada', null, ['class' => 'form-control']); ?>

</div>
<div class="input-group">
  <span class="input-group-addon">Datos del Registro Legal:</span>
          <?php echo Form::text('dato', null, ['class' => 'form-control']); ?>

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