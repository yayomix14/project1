<?php $__env->startSection('content'); ?>
<div class="col-xs-9">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo Form::open(['action' => 'UsuariosController@registrar', 
					'class' => 'well',
					'method' => 'POST']); ?>

	<legend bgcolor="lightblue"><?php echo e("Registrar Usuario"); ?></legend>
    	<?php echo $__env->make('usuarios.formularios.formUsuario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>