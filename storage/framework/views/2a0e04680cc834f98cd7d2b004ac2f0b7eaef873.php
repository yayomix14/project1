<?php $__env->startSection('content'); ?>

 <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('form input[type="text"]').prop("disabled", true);
        $('form input[type="number"]').prop("disabled", true);
        $('form input[type="date"]').prop("disabled", true);
        $('form select').prop("disabled", true);
    });
</script>
<div class="col-xs-9">
		<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="well">

	<legend bgcolor="lightblue">Primer Registro</legend>
	<input type="hidden" id="edit">
		<?php echo Form::model($id,['route'=>['general.update',$id->id],'role'=>'form','class'=>'form-horizontal','method'=>'PUT','files'=>true]); ?>

					
					<?php echo $__env->make('general.form.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<?php echo $__env->make('general.form.imagen', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<br>							

		<?php echo Form::close(); ?>


		
		<br>
	</div>
		
</div>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>