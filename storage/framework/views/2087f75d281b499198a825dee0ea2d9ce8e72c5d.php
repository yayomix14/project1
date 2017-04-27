<?php $__env->startSection('content'); ?>
<div class="col-xs-9">
	<div class="well text-center">
		<h1>Sistema aún en prueba</h1>
		<h2>Toda la información de prueba se borrará cuando el sistema ya sea probado</h2>
	</div>
	<img src="img/ejemplo.png" alt="" style="margin-left: 8em; margin-top: 2em;">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>