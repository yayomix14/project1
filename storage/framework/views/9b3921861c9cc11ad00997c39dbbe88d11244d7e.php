<?php $__env->startSection('content'); ?>
<div class="col-xs-9">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="well">

	<legend bgcolor="lightblue">Primer Registro <a href="<?php echo e(URL::to('general/create')); ?>" class="btn btn-success pull-right">Registrar nueva obra</a></legend>

		<table class="table table-bordered">
		<thead>
			<th style="background: #f2f2f2;color: #506CF5;">#</th>
			<th style="background: #f2f2f2;color: #506CF5;">Nombre</th>
			<th style="background: #f2f2f2;color: #506CF5;">Cedula/RIF</th>
			<th style="background: #f2f2f2;color: #506CF5;">Telefono</th>
			<th style="background: #f2f2f2;color: #506CF5;">Acción</th>
		</thead>
		<tbody id="datos_select">
		<?php foreach($query as $var): ?>
		<tr>
			<td><?php echo e($var->id); ?></td>
			<td><?php echo e($var->nombre_titular); ?></td>
			<td><?php echo e($var->cedula_rif); ?></td>
			<td><?php echo e($var->telefono); ?></td>
			<td><button class="btn btn-primary">Editar</button></td>
		</tr>	
		<?php endforeach; ?>
		</tbody>
	</table>
	
	<?php echo $query->render(); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>