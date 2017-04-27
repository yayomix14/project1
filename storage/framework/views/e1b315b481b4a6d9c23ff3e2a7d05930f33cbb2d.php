<?php $__env->startSection('content'); ?>
<div class="col-xs-9">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="well">
		<legend bgcolor="lightblue">Reporte por Fecha</legend>
		<?php echo Form::open(['route'=>'nombre_pdf','method'=>'POST','role'=>'form','class'=>'form-horizontal']); ?>

			<h4>Seleccione Fecha</h4>
			  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">Desde</span>
				  	<?php echo Form::date('desde', null,['class'=>'form-control','id'=>'desde','required'=>'required']); ?>

				  <span class="input-group-addon" id="basic-addon1">Hasta</span>
				  	<?php echo Form::date('hasta', null,['class'=>'form-control','id'=>'hasta','required'=>'required']); ?>

				  <span class="input-group-btn">
			        <button class="btn btn-warning btn-secondary" type="submit"><span class="glyphicon glyphicon-file"></span> Generar PDF</button>
			      </span>
				</div>
		<?php echo e(Form::close()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>