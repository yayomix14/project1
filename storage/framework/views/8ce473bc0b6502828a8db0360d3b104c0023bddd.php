<?php $__env->startSection('content'); ?>

<script src="/js/jquery-2.2.4.min.js"></script>
<div class="col-xs-9">
		<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="well">

	<legend bgcolor="lightblue">Primer Registro</legend>
	<input type="hidden" id="edit">
		<?php echo Form::model($id,['route'=>['conexas.update',$id->id],'role'=>'form','class'=>'form-horizontal','method'=>'PUT','files'=>true]); ?>

					
					<?php echo $__env->make('conexas.form.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<br>
			<?php echo Form::submit('Actualizar',['class'=>'btn btn-primary pull-right','id'=>'boton']); ?>

			
							

		<?php echo Form::close(); ?>


		<?php echo Form::open(['route'=>['conexas.destroy',$id->id],'role'=>'form','class'=>'form-horizontal','method'=>'DELETE']); ?>

						
			<?php echo Form::submit('Eliminar',['class'=>'btn btn-danger pull-left','onclick'=>'return pregunta_eliminar();']); ?>

							
		<?php echo Form::close(); ?>

		<br>
	</div>
		
</div>


<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#select_actividades_add').hide();
        var sell = $('#select_actividades').val();
          if (sell == 'transporte') {
            $('#select_actividades_add').show();
          }         
    });
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>