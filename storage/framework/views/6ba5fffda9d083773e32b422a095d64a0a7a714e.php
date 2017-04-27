<?php $__env->startSection('content'); ?>

<div class="col-lg-9" style="text-align: center">
    <?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="media">
        <a class="pull-left" href="#" style="text-align: center"></a>
        <div id="tablaRegistros" class="media-body">
            <!-- Table -->
            <div class="col-md-12" style="margin-bottom:5%;">
                <?php echo e(Form::open(array('url' => 'general7', 'method' => 'GET','role'=>'search'))); ?>

                <div class="col-md-6">
                <?php echo e(Form::text('nombre', null, ['id' =>  'producto', 'placeholder' =>  'Buscar Nombre','class'=>'form-control'])); ?>

                </div>
                <div class="col-md-1">
                <?php echo e(Form::button('<i class="fa fa-search"></i>', ['type' => 'submit', 'class' => 'btn btn-default btn-sm'] )); ?>


                </div>
                <div class="col-md-5">
                    <a href="/general7/create" class="btn pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Nuevo Registro</a>
                </div>
                <?php echo Form::close(); ?>

            </div>
              <table class="table">
                <tr bgcolor='FFAF36'>
                    <td>#</td>           
                    <td>Nombre</td>
                    <td>Cedula</td>
                    <td>Email</td>
                    <td>Estatus</td>
                    <td>Opcion</td>
                </tr>
                <?php foreach($querys as $query): ?>    
                    <tr>
                        <td><?php echo e($query->id); ?></td>
                        <td>  <?php echo e(str_limit($query->nombre,10)); ?> </td>
                        <td>  <?php echo e(str_limit($query->cedula,10)); ?> </td>
                        <td>  <?php echo e(str_limit($query->email,10)); ?></td>
                        <td> <?php echo e(date('d-m-Y',strtotime($query->fecha_n))); ?> </td>
                        <td>
                        <a href="/general7/edit/<?php echo e($query->id); ?>" class="btn btn-xs "><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                        <a href="/general7/destroy/<?php echo e($query->id); ?>" onclick="return pregunta_eliminar(this)" class="btn btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i></a> 
                        <a href="/general7_pdf/<?php echo e($query->id); ?>" onclick="return pregunta_pdf(this)" class="btn  btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php endforeach; ?>
              </table>
          <?php echo $querys->render(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>