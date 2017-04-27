<?php $__env->startSection('content'); ?>
<div class="col-xs-9">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="well">
		<legend bgcolor="lightblue">Agregar Mineral</legend>
		<?php echo Form::model($id,['route'=>['mineral.update',$id->id],'role'=>'form','class'=>'form-horizontal','method'=>'PUT']); ?>

			  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">Mineral</span>
				  	<?php echo Form::text('mineral', null,['class'=>'form-control','id'=>'mineral','required'=>'required','style'=>'text-transform:uppercase;']); ?>

				  	<span class="input-group-addon" id="basic-addon1">Precio Mineral</span>
				  	<?php echo Form::number('precio_mineral', null,['class'=>'form-control','id'=>'precio_mineral','required'=>'required','style'=>'text-transform:uppercase;']); ?>

				  	<span class="input-group-btn">
			        <button class="btn btn-primary btn-secondary" type="submit"><span class="glyphicon glyphicon-file"></span> Actualizar Mineral</button>
			      </span>
				</div>
		<?php echo e(Form::close()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>