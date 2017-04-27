

<?php $__env->startSection('content'); ?>
<div class="col-xs-9">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo Form::open(['action' => ['UsuariosController@cambiarClave', $usuario['id'], $usuario['encrypted_id']], 
					'class' => 'well',
					'method' => 'PUT']); ?>

	<legend bgcolor="lightblue"><?php echo e("Cambiar Clave"); ?></legend>
     <div id="" class="input-group">
		<span class="input-group-addon">Clave Actual</span>
			<?php echo Form::password('current_password', ['class' => 'form-control']); ?>

	</div>
	<br>
    <div id="" class="input-group">
		<span class="input-group-addon">Clave</span>
			<?php echo Form::password('password', ['class' => 'form-control']); ?>

	</div>
	<br>
	<div id="" class="input-group">
		<span class="input-group-addon">Repita su clave</span>
			<?php echo Form::password('password_confirmation', ['class' => 'form-control']); ?>

	</div>
	<br>
	<div class="form-group">
    	<div class="input-group">
    		<span class="input-group-btn">
    		<?php echo Form::button('Limpiar Formulario', ['type' => 'reset', 'class'=>'btn btn-danger']); ?>

    		</span>
    		<?php echo Form::submit('Guardar', ['class'=>'btn btn-primary pull-right']); ?>

      </div>
</div>
	<?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>