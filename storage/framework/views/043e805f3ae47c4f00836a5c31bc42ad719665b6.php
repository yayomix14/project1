<?php $__env->startSection('content'); ?>
<div class="col-xs-9">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	<?php echo Form::open(['route'=>'general.store','method'=>'POST','role'=>'form','class'=>'form-horizontal well']); ?>

	<legend bgcolor="lightblue">Primer Registro</legend>


	<?php echo $__env->make('general.form.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<br>
	<?php echo Form::reset('Limpiar Formulario',['class'=>'btn btn-danger','onclick'=>'return pregunta_limpiar();']); ?>

	<?php echo Form::submit('Registrar',['class'=>'btn btn-primary pull-right','onclick'=>'return pregunta_registrar();']); ?>


	<?php echo Form::close(); ?>



</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>