<?php $__env->startSection('content'); ?>

<script src="/js/jquery-2.2.4.min.js"></script>
<div class="col-xs-9">
		
		<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="well">

	<legend bgcolor="lightblue">Primer Registro</legend>
	<input type="hidden" id="edit">
		<?php echo Form::model($id,['route'=>['general.update',$id->id],'role'=>'form','class'=>'form-horizontal','method'=>'PUT','files'=>true]); ?>

					
					<?php echo $__env->make('general.form.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<?php echo $__env->make('general.form.imagen', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<br>
			<?php echo Form::submit('Actualizar',['class'=>'btn btn-primary pull-right','id'=>'boton']); ?>

			
							

		<?php echo Form::close(); ?>


		<?php echo Form::open(['route'=>['general.destroy',$id->id],'role'=>'form','class'=>'form-horizontal','method'=>'DELETE']); ?>

						
			<?php echo Form::submit('Eliminar',['class'=>'btn btn-danger pull-left','onclick'=>'return pregunta_eliminar();']); ?>

							
		<?php echo Form::close(); ?>

		<br>
	</div>
		
</div>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>