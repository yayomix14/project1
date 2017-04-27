

<?php $__env->startSection('content'); ?>
 <div class="text-center">
	<label class="checkbox">
  		<font color="red"> <h3> Su dirección IP ha sido bloqueada por intentos fallidos de acceso al Sistema</h3> </font>
     	<font color="red"> <h3>  <h3> Comuniquese o dirigase a la Dirección de la Oficina Regional de Servicios de Informatica</h3> </font>
    </label> 
    <br>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>