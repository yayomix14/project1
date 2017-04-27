

<?php $__env->startSection('content'); ?>
<div class="col-lg-9" style="text-align: center">
    <?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="media">
        <a class="pull-left" href="#" style="text-align: center"></a>
        <div id="tablaRegistros" class="media-body">
            <!-- Table -->
          <table id="tablaReg" class="table">
            <tr bgcolor='FFAF36'>
                <td width="2%">Nº</td>
		        <td>Ip</td>
		        <td>Nombre</td>
		        <td>Tipo</td>
		        <td>Accion</td>
		        <td>Fecha</td>
                <td>Hora</td>
            </tr>
            <?php if(isset($registros[0])): ?>
                <?php foreach($registros as $registro): ?>
                <tr>
                    <td>  <?php echo e($registro->id); ?>  </td>
		            <td>  <?php echo e($registro->ip); ?>  </td>
		            <td>  <?php echo e($registro->usuario); ?>  </td>
		            <td>  <?php echo e($registro->tipo); ?>  </td>
		            <td>  <?php echo e($registro->accion); ?>  </td>
		            <td>  <?php echo e($registro->fecha); ?>  </td>
                    <td>  <?php echo e($registro->hora); ?>  </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No existen registros</td>
                </tr>
            <?php endif; ?>

          </table>
            <div class="pagination" style="text-align:center">
                <?php echo $registros->render(); ?>

            </div>
            <p> Página <?php echo e($registros->currentPage()); ?> de <?php echo e($registros->lastPage()); ?> </p>    
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>