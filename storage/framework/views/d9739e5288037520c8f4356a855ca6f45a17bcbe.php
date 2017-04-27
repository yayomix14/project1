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

						<table class="table table-bordered">
					        <thead>
					          <th style="background: #f2f2f2;color: #506CF5;">Nombre</th>
					          <th style="background: #f2f2f2;color: #506CF5;">Latitud</th>
					          <th style="background: #f2f2f2;color: #506CF5;">Longitud</th>
					        </thead>
					        <?php foreach($generals as $general): ?>
					        <tbody>
					          <td style="text-transform: uppercase;"><?php echo e($general->nombre_titular); ?></td>
					          <td><?php echo e($general->latitud); ?></td>
					          <td><?php echo e($general->longitud); ?></td>
					        </tbody>
					        <?php endforeach; ?>
				      </table>
					  <?php echo $generals->render(); ?>

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
<script type="text/javascript">

	//localStorage.clear();
	function expRegular(e){
		var tecla;
		tecla = (document.all) ? e.keyCode : e.which;
		if(tecla == 8)
		{return true;}
		var patron;
		patron = /[0-9.-]/
		var te;
		te = String.fromCharCode(tecla);
		return patron.test(te);
	}

	$(document).ready(function(){    
	    $('#boton-guardar').click(function(){        
	        lat = document.getElementById("latitud").value;
	        lon = document.getElementById("longitud").value;
	        localStorage.setItem("Latitud", lat);
	        localStorage.setItem("Longitud", lon);
	        //document.getElementById("latitud").value = "";
	        //document.getElementById("placa").innerHTML = 'Placa: '+localStorage.getItem("Placa");
	        if (latitud_var == null && longitud_var == null) {
				$('#mapita').hide();
				$('#legend-mostrar').hide();
			}else{
				$('#mapita').show();
				$('#legend-mostrar').show();
			} 
			location.reload();
	    });
	    latitud_var = localStorage.getItem("Latitud");
	    longitud_var = localStorage.getItem("Longitud");
	
		//document.getElementById("latitud").value = latitud_var;
		//document.getElementById("longitud").value = longitud_var;

		document.getElementById("latitud_readonly").value = latitud_var;
		document.getElementById("longitud_readonly").value = longitud_var;

		if (latitud_var == null && longitud_var == null) {
			$('#mapita').hide();
			$('#legend-mostrar').hide();
		}else{
			$('#mapita').show();
			$('#legend-mostrar').show();
		} 

		var planes = [
			["Punto de busqueda ingresado",latitud_var,longitud_var]
		];

        var map = L.map('map').setView([11.3929277, -69.6657661], 8);
        mapLink = 
            '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Gobernacion Estado Falcón',
            maxZoom: 18,
            }).addTo(map);

		for (var i = 0; i < planes.length; i++) {
			marker = new L.marker([planes[i][1],planes[i][2]])
				.bindPopup(planes[i][0])
				.addTo(map);
		}

	});





	
              

</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>