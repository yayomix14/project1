<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="css/leaflet.css"/>
<div class="col-xs-9">
	<?php echo $__env->make('elementos.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="well">
		<legend bgcolor="lightblue">Buscar por Coordenadas</legend>
		<div class="content">
			<div class="row">
					<div class="well">
						<h3 class="text-center">Coordenadas de ejemplo: Latitud: 11.40658396  Longitud: -69.6781522</h3>
					</div>
					<div id="legend-mostrar">
						<h4>Ultima Ubicación Buscada</h4>
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">Latitud</span>
						  	<?php echo Form::text('latitud', null,['class'=>'form-control','id'=>'latitud_readonly','readonly'=>'readonly']); ?>

						  <span class="input-group-addon" id="basic-addon1">Longitud</span>
						  	<?php echo Form::text('longitud', null,['class'=>'form-control','id'=>'longitud_readonly','readonly'=>'readonly']); ?>

						  <span class="input-group-btn">
					      </span>
						</div>
					</div>
					<h3>Seleccione Fecha</h3>
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">Latitud</span>
						  	<?php echo Form::text('latitud', null,['class'=>'form-control','id'=>'latitud','required'=>'required','onkeypress' => 'return expRegular(event)']); ?>

						  <span class="input-group-addon" id="basic-addon1">Longitud</span>
						  	<?php echo Form::text('longitud', null,['class'=>'form-control','id'=>'longitud','required'=>'required','onkeypress' => 'return expRegular(event)']); ?>

						  <span class="input-group-btn">
					        <button class="btn btn-success btn-secondary" id="boton-guardar"><span class="fa fa-map-marker"></span> Ubicar</button>
					      </span>
						</div>
				<br>
				<div id="mapita">
					<div id="map" style="width: 810px; height: 500px"></div>
				</div>
				
				
			</div>
		</div>
	</div>
</div>
<script src="js/leaflet.js"></script>
<script src="js/map2.js"></script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>