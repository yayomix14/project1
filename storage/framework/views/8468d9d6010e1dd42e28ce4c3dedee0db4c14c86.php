<?php $__env->startSection('content'); ?>
<div class="col-lg-9" style="text-align: center">
    <?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="media">
        <a class="pull-left" href="#" style="text-align: center"></a>
        <div id="tablaRegistros" class="media-body">
            <!-- Table -->
          <table id="tablaReg" class="table">
            <tr bgcolor='FFAF36'>
                <td width="2%">Nombre</td>
                <td>Cedula</td>
                <td>Tipo</td>
                <td>Estatus</td>
                <td>Opcion</td>
            </tr>
            <?php if(isset($usuarios[0])): ?>
                <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td>  <?php echo e($usuario->username); ?> </td>
                    <td>  <?php echo e($usuario->cedula); ?> </td>
                    <td>  <?php echo e($usuario->tipo); ?> </td>
                    <td> <?php echo e(( ($usuario->estatus % 2 )  == 0 ) ? 'Suspendido' : 'Activo'); ?> </td>
                    <td> <?php echo Form::open(['action' => ['UsuariosController@eliminar', $usuario->id, $usuario->encrypted_id],'method' => 'DELETE']); ?>

                     
                     <?php echo link_to_action('UsuariosController@modificar', $title = 'Actualizar', $parameters = [$usuario->id, $usuario->encrypted_id], $attributes = ['class' => 'btn btn-success btn-xs']); ?>

                  
                        <?php echo Form::submit('Eliminar', ['class'=>'btn btn-danger btn-xs']); ?>


                    <?php echo link_to_action('UsuariosController@cambiarEstatus', $title = 'Cambiar Estatus', $parameters = [$usuario->id, $usuario->encrypted_id], $attributes = ['class' => 'btn btn-primary btn-xs']); ?>


                    <?php echo link_to_action('UsuariosController@cambiarClave', $title = 'Cambiar Clave', $parameters = [$usuario->id, $usuario->encrypted_id], $attributes = ['class' => 'btn btn-info btn-xs']); ?>


                    <?php echo Form::close(); ?>


                   </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No existen registros</td>
                </tr>
            <?php endif; ?>

          </table>
          <div class="pagination" style="text-align:center">
                <?php echo $usuarios->render(); ?>

          </div> 
           <p> Página <?php echo e($usuarios->currentPage()); ?> de <?php echo e($usuarios->lastPage()); ?> </p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>