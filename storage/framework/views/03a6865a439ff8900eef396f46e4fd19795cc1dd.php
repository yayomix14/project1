<?php $__env->startSection('content'); ?>

 <?php /* <div class="col-lg-9" style="text-align: center">
<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="media">
	    <div id="tablaRegistros" class="media-body well">
		    <div class="input-group">
		    	<span class="input-group-addon">Municipio</span>
			      <?php echo Form::select('municipio', ['L' => 'Large', 'S' => 'Small'], 'municipio',['id'=>'parroquia','class'=>'form-control upper']); ?>

			    <span class="input-group-addon">Parroquia</span>
			      <?php echo Form::select('parroquia', ['L' => 'Large', 'S' => 'Small'], 'parroquia',['id'=>'parroquia','class'=>'form-control upper']); ?>

			    <span class="input-group-addon"><?php echo Form::submit('Consultar',['class'=>'btn btn-xs']); ?></span>
		    </div>
	     </div>
	</div>
</div>
  */ ?>

<div class="col-xs-9">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="well">
		<legend>Consulta de Reporte </legend>
		    <div class="input-group">
			<h4>Seleccione Municipio y Parroquia</h4>
			  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<div class="input-group">
				  <span class="input-group-addon">Municipio</span>
			      <?php echo Form::select('municipio', ['L' => 'Large', 'S' => 'Small'], 'municipio',['id'=>'parroquia','class'=>'form-control upper']); ?>

				 <span class="input-group-addon">Parroquia</span>
			      <?php echo Form::select('parroquia', ['L' => 'Large', 'S' => 'Small'], 'parroquia',['id'=>'parroquia','class'=>'form-control upper']); ?>

				  <span class="input-group-btn">
			        <button class="btn btn-warning btn-secondary" type="submit"><span class="glyphicon glyphicon-save-file"></span> Generar Consulta del Reporte</button>
			      </span>
				</div>
		<?php echo e(Form::close()); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>