<?php $__env->startSection('content'); ?>
<div class="col-xs-9">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="well">
		<legend bgcolor="lightblue">Primer Registro <a href="<?php echo e(URL::to('mineral/create')); ?>" class="btn btn-success btn-sm pull-right"><span class="glyphicon glyphicon-plus"></span> Registrar nuevo mineral</a></legend>
		<div class="content">
			<div class="row">
				<table class="table table-bordered">
			        <thead>
			          <th style="background: #f2f2f2;color: #506CF5;">ID</th>
			          <th style="background: #f2f2f2;color: #506CF5;">Mineral</th>
			          <th style="background: #f2f2f2;color: #506CF5;">Precio</th>
			          <th style="background: #f2f2f2;color: #506CF5;">Acción</th>
			        </thead>
			        <?php foreach($querys as $query): ?>
			        <tbody>
			          <td><?php echo e($query->id); ?></td>
			          <td style="text-transform: uppercase;"><?php echo e($query->mineral); ?></td>
			          <td style="text-transform: uppercase;"><?php echo e($query->precio_mineral); ?></td>
			          <td style="width: 24%;"><a href="/mineral/edit/<?php echo e($query->id); ?>" class="btn btn-xs btn-info">Modificar</a> <a href="/mineral/destroy/<?php echo e($query->id); ?>" class="btn btn-xs btn-danger" onclick="">Eliminar</a></td>
			        </tbody>
			        <?php endforeach; ?>
		      </table>
			  <?php echo $querys->render(); ?>

			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>