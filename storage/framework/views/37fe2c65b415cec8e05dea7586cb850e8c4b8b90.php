<?php $__env->startSection('content'); ?>
<div class="col-xs-9">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="well">
		<legend bgcolor="lightblue">Reporte por Actividades Conexas</legend>
		<?php echo Form::open(['route'=>'modalidad_pdf','method'=>'POST','role'=>'form','class'=>'form-horizontal']); ?>

			<div class="input-group">
				 <span class="input-group-addon">Seleccione</span>
					<?php echo Form::select('modalidad', ['conseciones' => 'Conseciones', 'mineria artesanal' => 'Mineria Artesanal', 'pequeña mineria' => 'Pequeña Mineria','actividades conexas'=>'Actividades Conexas','mancomunidades mineras'=>'Mancomunidades Mineras'], null,['class' => 'form-control chosen-type', 'placeholder' => 'Seleccione','id'=>'modalidad','required'=>'required']); ?>

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