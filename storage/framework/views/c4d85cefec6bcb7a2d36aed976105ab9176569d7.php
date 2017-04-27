<?php $__env->startSection('content'); ?>
<div class='row'>
		<?php echo Form::open(['url' => '/login',
						'class' => 'form-signin', 
						'method' => 'POST']); ?>

		<div class="container">
		<h3 class="form-signin-heading">Iniciar Sesión</h3>
			<?php echo Form::text('username', null, ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'usuario']); ?>

			<?php echo Form::password('password', ['class' => 'form-control', 'placeholder' => 'contraseña']); ?>


			<?php echo Form::submit('Iniciar Sesión', ['class'=>'btn btn-lg btn-primary btn-block success']); ?>

		
			<?php echo Form::close(); ?>

			<br>
			<?php echo $__env->make('elementos.msj-error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
		
		<br>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>