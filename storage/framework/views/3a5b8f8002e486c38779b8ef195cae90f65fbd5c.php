<?php $__env->startSection('content'); ?>
<div class="col-lg-9" style="text-align: center">
    <?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="media">
        <a class="pull-left" href="#" style="text-align: center"></a>
        <div id="tablaRegistros" class="media-body">
            <!-- Table -->
        <legend>Registro</legend>

            <?php echo Form::open(array('url' => '/general2/save')); ?>

                  <?php echo $__env->make('general2.form.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-primary pull-left'])); ?>

            <?php echo Form::close(); ?>


        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>