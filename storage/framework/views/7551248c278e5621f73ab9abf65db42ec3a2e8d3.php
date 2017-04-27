<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte por Duración de Concesión | CORPOFALCÓN</title>
	<style type="text/css">
		fieldset {position:relative} /* For legend positioning */
		#el01 legend {padding:0} /* Remove padding */
		#el02 legend { /* Text and background colour, blue on light gray */
		color:#00f;
		background-color:#ddd;
		}
		#el03 legend {background:url(/i/icon-info.gif) no-repeat 100% 50%} /* Background image */
		#el04 legend {margin:0} /* Remove margin */
		#el05 legend {border:2px dotted #00f} /* Border width, style and colour */
		#el06 legend { /* Position at top left corner of fieldset */
		position:absolute;
		top:0;
		left:0;
		}
		#el07 legend {font-family:"Courier New",Courier} /* Different font */
		#el08 legend {font-size:2em} /* Bigger text */
		#el09 legend {font-size:0.5em} /* Smaller text */
		#el10 legend {font-weight:bold} /* Bold text */
		#el11 legend {padding:2em} /* Increase padding */
		#el12 legend {text-align:right} /* Change text alignment */

		div{
			font-size: 10px;
		}
		b{
			text-align: center;
		}
		th, td {
    		border-bottom: 1px solid #ddd;
    		text-transform: uppercase;
		}
		h3{
			text-align: center;
		}
	</style>
</head>
<body>
<fieldset id="el##">
<legend><b>CORPOFALCÓN</b></legend>
	<img src="<?php echo e(asset('images')); ?>/gobernacion.png" alt="" style="width: 200px; ">
	<img src="<?php echo e(asset('images')); ?>/gobernacion.png" alt="" style="width: 200px; margin-left: 600px;">
	<div style="position: absolute; margin-left: -600px;">
		<div><b>Gobernación Estado Falcón</b></div>
		<div><b>Reporte Proximos a Vencer Duración de Concesión</b></div>
		<?php /* <div><b>Fecha Desde: <?php echo e(date('d/m/Y',strtotime($desde))); ?> Hasta: <?php echo e(date('d/m/Y',strtotime($hasta))); ?></b></div> */ ?>
		
	</div>
</fieldset>	
	
	<?php if($querys != null): ?>
	<table style="width:100%; font-size: 10px;">
	  <tr>
	    <th style="border: 0.5px solid #000;">Nombre</th>
	    <th style="border: 0.5px solid #000;">Cedula/RIF</th>
	    <th style="border: 0.5px solid #000;">Teléfono</th>
	    <th style="border: 0.5px solid #000;">Mineral</th>
	    <th style="border: 0.5px solid #000;">Nombre Cantera</th>
	    <th style="border: 0.5px solid #000;">Ubicación Cantera</th>
	    <th style="border: 0.5px solid #000;">Fecha Ins.</th>
	  </tr>
	  <tbody>
	<?php foreach($querys as $query): ?>
	  <?php if($query->hasta == date('Y-m-d') || $query->hasta >= date('Y-m-d')): ?>
			<tr style="color: red;">
				<?php /* <th><?php echo e($query->hasta); ?></th> */ ?>
			    <th><?php echo e($query->nombre_titular); ?></th>
			    <th><?php echo e($query->deno_rif); ?> - <?php echo e($query->nombre_titular); ?></th> 
			    <th><?php echo e($query->telefono); ?></th>
			    <th><?php echo e($query->mineral); ?></th>
			    <th><?php echo e($query->nombre_cantera); ?></th>
			    <?php if($query->ubicacion == ''): ?>
			    	<th><?php echo e($query->ubicacion); ?></th>
			    <?php else: ?>
			    	<th>Municipio <?php echo e($query->ubicacion); ?></th>
			    <?php endif; ?>
			    <?php if($query->fecha_inspecciones == ''): ?>
			    	<th><?php echo e($query->fecha_inspecciones); ?></th>
			    <?php else: ?>
					<th><?php echo e(date('d/m/Y',strtotime($query->fecha_inspecciones))); ?></th>
			    <?php endif; ?>
			</tr>
	  <?php endif; ?>
	  
	<?php endforeach; ?>
	  </tbody>
	</table>

	<?php else: ?>

			<h3>NO HAY INFORMACIÓN EN LA FECHA SELECCIONADA</h3>

	<?php endif; ?>

</body>
</html>