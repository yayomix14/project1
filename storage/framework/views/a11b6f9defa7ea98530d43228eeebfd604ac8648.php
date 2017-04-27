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
      <?php echo e(Form::select('diciplina', ['Artes Escénicas(Teatro, Danza y Música)' => 'Artes Escénicas(Teatro, Danza y Música)', 'Artesania' => 'Artesania','Artes Visuales'=> 'Artes Visuales','Expresiones Literarias'=>'Expresiones Literarias','Animación y Recreación'=>'Animación y Recreación','Actividades Deportivas Tradicionales'=>'Actividades Deportivas Tradicionales','Otras'=>'Otras'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])); ?> 
</div>
<div class="input-group">

  <span class="input-group-addon">Categoria</span>
      <?php echo e(Form::select('categoria', ['Tradicional' => 'Tradicional','Moderna' => 'Moderna', 'Contemporáneo' => 'Contemporáneo','Clasica'=>'Clasica','Emergente'=>'Emergente'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])); ?>                      
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

     
</div>                
<div class="input-group">
   <span class="input-group-addon">Otras Especficaciones </span>
          <?php echo Form::text('otras', null, ['class' => 'form-control']); ?>

   
</div>
<div class="input-group">
<span class="input-group-addon">Fecha de Fundada</span>
          <?php echo Form::date('fundada', null, ['class' => 'form-control']); ?>

  <span class="input-group-addon">Datos del Registro Legal:</span>
          <?php echo Form::text('dato', null, ['class' => 'form-control']); ?>  
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