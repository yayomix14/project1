    <div class="input-group has-primary" on="">

        <span class="input-group-addon">Principales Proveedores</span>
        <?php echo Form::text('proveedores',null,['id'=>'proveedores','class'=>'form-control','placeholder'=>'Ejemplo: Monto ventajas']); ?>


        <span class="input-group-addon">Actividades</span>
        <?php echo Form::select('select_actividades', ['transporte' => 'Transporte', 'comercializacion' => 'Comercialización','almacenamiento'=>'Almacenamiento'], null,['class' => 'form-control chosen-type', 'placeholder' => 'Seleccione','id'=>'select_actividades','required'=>'required']); ?>


    </div>

    <div class="input-group has-primary" on="" id="select_actividades_add">

        <span class="input-group-addon">Placa</span>
        <?php echo Form::text('placa',null,['id'=>'placa','class'=>'form-control','placeholder'=>'Placa']); ?>


        <span class="input-group-addon">Propietario</span>
        <?php echo Form::text('propietario',null,['id'=>'propietario','class'=>'form-control','placeholder'=>'Propietario']); ?>


        <span class="input-group-addon">Modelo</span>
        <?php echo Form::text('modelo',null,['id'=>'modelo','class'=>'form-control','placeholder'=>'modelo']); ?>


        <span class="input-group-addon">Capacidad</span>
        <?php echo Form::text('capacidad',null,['id'=>'capacidad','class'=>'form-control','placeholder'=>'capacidad']); ?>


    </div>

    <div class="input-group has-primary" on="" id="select_actividades_add2">

        <span class="input-group-addon">Origen</span>
        <?php echo Form::text('origen',null,['id'=>'origen','class'=>'form-control','placeholder'=>'Placa']); ?>

    </div>
    <div class="input-group has-primary" on="" id="select_actividades_add3">
        <span class="input-group-addon">Destino</span>
        <?php echo Form::text('destino',null,['id'=>'destino','class'=>'form-control','placeholder'=>'Propietario']); ?>

    </div>



<script src="<?php echo e(url('js')); ?>/daterangepicker.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#select_actividades_add').hide();
        
        $( "#select_actividades" ).click(function() {
          var sell = $('#select_actividades').val();
              if (sell == 'transporte') {
                $('#select_actividades_add').fadeIn();
              }else{
                $('#select_actividades_add').fadeOut();
              }
        });
    });
</script>

