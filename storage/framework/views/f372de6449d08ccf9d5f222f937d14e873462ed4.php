<?php $__env->startSection('content'); ?>
<div class="col-xs-9">
	<img src="img/ejemplo.png" alt="" style="margin-top: 4em;">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>