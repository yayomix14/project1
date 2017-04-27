<?php $__env->startSection('content'); ?>
<div class="col-xs-9">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="well">




	<div class="col-lg-12">
	        <div class="input-group my-group" style="width:117%;"> 
	        <?php echo e(Form::open(array('url' => 'conexas', 'method' => 'GET','role'=>'search'))); ?>

	        	<?php echo Form::select('selected_buscador', array('proveedores' => 'Proveedor'), null, ['placeholder' => 'Seleccione que desea buscar','class'=>'selectpicker form-control','style'=>'width:25%;','data-live-search'=>'true','id'=>'selected_buscador','required'=>'required','onChange'=>'opcion()']); ?>


			<?php echo e(Form::text('numero_buscador', '', ['id' =>  'numero_buscador', 'placeholder' =>  'Ingrese Nombre Proveedor','class'=>'form-control','style'=>'background: #DFF0D8;width:50%; text-align:center;'])); ?>


	   			  <span class="input-group-btn">
						<?php echo e(Form::submit('BUSCAR', array('class' => 'btn btn-info','style'=>'position: absolute;left: 666px;bottom: 0px;'))); ?>

				  </span>

	        </div>
	        <!-- /input-group -->
	</div>
    <!-- /.col-lg-6 -->
    		<?php echo e(Form::close()); ?>

        <br/>





	<legend bgcolor="lightblue">Actividades Conexas <a href="<?php echo e(URL::to('conexas/create')); ?>" class="btn btn-primary btn-sm pull-right"><span class="glyphicon glyphicon-plus"></span> Agregar Nuevo Registro</a></legend>

		<table class="table table-bordered">
		<thead>
			<th style="background: #f2f2f2;color: #506CF5;">#</th>
			<th style="background: #f2f2f2;color: #506CF5;">Proveedor</th>
			<th style="background: #f2f2f2;color: #506CF5;">Actividades</th>
			<th style="background: #f2f2f2;color: #506CF5;">Origen</th>
			<th style="background: #f2f2f2;color: #506CF5;">Destino</th>
			<th style="background: #f2f2f2;color: #506CF5;">Acción</th>
		</thead>
		<tbody id="datos_select">
		<?php foreach($query as $var): ?>
		<tr id="<?php echo e($var->id); ?>">
			<td ><?php echo e($var->id); ?><input id="desde" type="hidden" value="<?php echo e($var->desde); ?>"></td>
			<td id=""><?php echo e($var->proveedores); ?><input id="hasta" type="hidden" value="<?php echo e($var->hasta); ?>"></td>
			<td id="" style="text-transform: capitalize;"><?php echo e($var->select_actividades); ?></td>
			<td id=""><?php echo e($var->origen); ?></td>
			<td id=""><?php echo e($var->destino); ?></td>
			<td style="width: 30%;">
			<?php if(Auth::user()->tipo == 'admin'): ?>
				<a href="/conexas/edit/<?php echo e($var->id); ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span> Modificar</a>
				<a href="/conexas/destroy/<?php echo e($var->id); ?>" class="btn btn-danger btn-xs" onclick="return pregunta_eliminar(this)"><span class="glyphicon glyphicon-trash"></span> Eliminar</a>
			<?php endif; ?>
			<a href="/conexas_pdf/<?php echo e($var->id); ?>" class="btn btn-warning btn-xs" onclick="return pregunta_pdf()"><span class="glyphicon glyphicon-file"></span> PDF</a>
			<?php if(Auth::user()->tipo == 'usuario'): ?>
				<a href="/conexas/ver/<?php echo e($var->id); ?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Ver</a>
			<?php endif; ?>
			</td>
		</tr>	
		<?php endforeach; ?>
		</tbody>
	</table>
	
	<?php echo $query->render(); ?>

	</div>
</div>


<script type="text/javascript">
			function opcion(){
				var op = $("#selected_buscador").val();
			    $.ajax({
					url:"conexas/autocomplete",
					type:"GET",
					dataType:"json",
					data:{opcion:op},
					success: function(dato){
						//console.log(dato);
						//var objeto = JSON.parse(dato);
						$( "#numero_buscador" ).autocomplete({
							source: dato,
						});
					}
			    });
				
			}
			
</script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>