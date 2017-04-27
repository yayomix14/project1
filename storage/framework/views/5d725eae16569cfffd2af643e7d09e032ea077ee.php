<?php if(Session::has('msj-error')): ?>
    <div class="col-xs-12">
        <div class="alert alert-dismissible alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo e(Session::get('msj-error')); ?>

        </div>
    </div>
<?php endif; ?>