<?php $__env->startSection('content'); ?>
<div class="col-xs-9">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo Form::model($usuario, ['action' => ['UsuariosController@modificar', $usuario->id, $usuario->encrypted_id], 
					'class' => 'well',
					'method' => 'PUT']); ?>

	<legend bgcolor="lightblue"><?php echo e("Actualizar Usuario"); ?></legend>
    	<?php echo $__env->make('usuarios.formularios.formUsuario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>