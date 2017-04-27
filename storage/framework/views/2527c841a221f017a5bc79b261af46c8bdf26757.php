<?php $__env->startSection('content'); ?>
<div class="col-lg-9" style="text-align: center">
    <?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="media">
        <a class="pull-left" href="#" style="text-align: center"></a>
        <div id="tablaRegistros" class="media-body">
            <!-- Table -->
        <legend>Registro</legend>

            <?php echo Form::model($id,['route'=>['general3.update',$id->id],'role'=>'form','class'=>'form-horizontal','method'=>'PUT']); ?>

            
            
                <?php echo Form::token(); ?>

                  <div id="" class="input-group">
                    <span class="input-group-addon">Fecha de Registro</span>
                        <?php echo Form::date('fecha', null, ['class' => 'form-control']); ?>

                    <span class="input-group-addon">Còdigo de Registro</span>
                        <?php echo Form::number('codigo', null, ['class' => 'form-control']); ?>

                    
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon">Disciplina</span>
                        <?php echo e(Form::select('diciplina', ['Artes Escénicas' => 'Artes Escénicas', 'Artesano' => 'Artesano','Artes Visuales'=>'Artes Visuales','Expresiones Literarias'=>'Expresiones Literarias','Animación y Recreación'=>'Animación y Recreación','Otras'=>'Otras'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])); ?> 
                    <span class="input-group-addon">Desempeño</span>
                        <?php echo e(Form::select('desempeño', ['Animador' => 'Animador', 'Recreador Infantil' => 'Recreador Infantil','Actividades Pedagógicas'=>'Actividades Pedagógicas'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])); ?> 
                    <span class="input-group-addon">Categoria</span>
                        <?php echo e(Form::select('categoria', ['Tradicional' => 'Tradicional', 'Contemporáneo' => 'Contemporáneo','Emergente'=>'Emergente'], null, ['placeholder' => 'Seleccione...','class'=>'form-control'])); ?>                      
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon">Nombres y Apellidos</span>
                        <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

                      <span class="input-group-addon">C.I</span>
                        <?php echo Form::number('cedula', null, ['class' => 'form-control']); ?>

                  </div>
                  <div class="input-group">
                      <span class="input-group-addon">Lugar de Nacimiento</span>
                        <?php echo Form::text('lugar', null, ['class' => 'form-control']); ?>

                      <span class="input-group-addon">Fecha de Nacimiento</span>
                        <?php echo Form::date('fecha_n', null, ['class' => 'form-control']); ?>

                      <span class="input-group-addon">Edad</span>
                        <?php echo Form::number('edad', null, ['class' => 'form-control']); ?>

                  </div>
                  <div class="input-group">
                      <span class="input-group-addon">Direcciòn</span>
                        <?php echo Form::text('direccion', null, ['class' => 'form-control']); ?>

                  </div>
                  <div class="input-group">
                      <span class="input-group-addon">Municipio</span>
                        <?php echo Form::text('municipio', null, ['class' => 'form-control']); ?>

                      <span class="input-group-addon">Parroquia</span>
                        <?php echo Form::text('parroquia', null, ['class' => 'form-control']); ?>

                  </div>
                <div class="input-group">
                <span class="input-group-addon">Telefono</span>
                        <?php echo Form::number('telefono', null, ['class' => 'form-control']); ?>

                <span class="input-group-addon">Email</span>
                        <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

                 <span class="input-group-addon">Condicion Actual</span>
                        <?php echo Form::text('condicion', null, ['class' => 'form-control']); ?>

                <span class="input-group-addon">Participante de Asociación</span>
                 <span class="input-group-addon">Si</span>  
                        <?php echo Form::radio('partcipante', 'si', ['class' => 'form-control']); ?>

                 <span class="input-group-addon">No</span>  
                        <?php echo Form::radio('partcipante', 'no', ['class' => 'form-control']); ?>

                    </div>                
                    <div class="input-group">
                 <span class="input-group-addon">Tiempo de trayectoria</span>
                        <?php echo Form::date('trayectoria', null, ['class' => 'form-control']); ?>

                 <span class="input-group-addon">Nombre de la Asociacion</span>
                        <?php echo Form::text('asociacion', null, ['class' => 'form-control']); ?>

                    </div>
                    <div class="input-group">
                <span class="input-group-addon">Especificación de la actividad que realiza:</span>
                        <?php echo Form::text('actividad', null, ['class' => 'form-control']); ?>

                        
                    </div>
                    <br>
                    <?php echo e(Form::submit('Guardar',['class'=>'btn btn-primary pull-left'])); ?>



            <?php echo Form::close(); ?>


          

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>