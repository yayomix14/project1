<?php $__env->startSection('content'); ?>
<div class="col-xs-9">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<input type="hidden" id="create">
	<?php echo Form::open(['route'=>'conexas.store','method'=>'POST','role'=>'form','class'=>'form-horizontal well','accept-charset'=>'UTF-8','enctype'=>'multipart/form-data','files'=>true]); ?>

	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<legend bgcolor="lightblue">Actividades Conexas</legend>

	<?php echo $__env->make('conexas.form.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<br>
	<?php echo Form::reset('Limpiar Formulario',['class'=>'btn btn-danger','onclick'=>'return pregunta_limpiar();']); ?>

	<?php echo Form::submit('Registrar',['class'=>'btn btn-primary pull-right','onclick'=>'return pregunta_registrar();','id'=>'boton']); ?>


	<?php echo Form::close(); ?>



</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>