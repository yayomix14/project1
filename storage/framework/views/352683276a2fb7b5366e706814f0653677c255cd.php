<?php $__env->startSection('content'); ?>
<div class="col-xs-9">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<input type="hidden" id="create">
	<?php echo Form::open(['route'=>'general.store','method'=>'POST','role'=>'form','class'=>'form-horizontal well','accept-charset'=>'UTF-8','enctype'=>'multipart/form-data','files'=>true]); ?>

	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<legend bgcolor="lightblue">Primer Registro</legend>


	<?php echo $__env->make('general.form.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




	<br>
	<?php echo Form::reset('Limpiar Formulario',['class'=>'btn btn-danger','onclick'=>'return pregunta_limpiar();']); ?>

	<?php echo Form::submit('Registrar',['class'=>'btn btn-primary pull-right','onclick'=>'return pregunta_registrar();','id'=>'boton']); ?>


	<?php echo Form::close(); ?>



</div>

<?php $__env->stopSection(); ?>


	<script>


	$('#usuarios').chosen({

	    width: "100%",
	    placeholder_text_multiple: "Seleccione",
	    no_results_text: "No se ha encontrado",
	    max_selected_options: 5
	 
	    
	  });



	</script>



<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>