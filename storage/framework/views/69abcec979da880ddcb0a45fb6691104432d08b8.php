<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte - Actividades Conexas</title>
	<style>
		h4{
			text-transform: uppercase;
			font-size: 20px;
		}
		div{
			font-size: 17px;
		}
		img{
			width:700px;
			height:450px;
			margin-left:32%; 
			margin-top: -55%; 
			position: absolute;
			/*opacity: 0.8;*/

		}
	</style>
</head>
<body>

	
	<h4>Actividades Conexas</h4>
		<div><b>Principales Proveedores:</b> <?php echo e($querys_pdf->proveedores); ?></div>
		<div style="text-transform: capitalize;"><b>Actividades:</b> <?php echo e($querys_pdf->select_actividades); ?></div>
		<?php if($querys_pdf->select_actividades == 'transporte'): ?>
		  <?php if($querys_pdf->placa != null): ?>
			<div><b>Placa:</b> <?php echo e($querys_pdf->placa); ?></div>
		  <?php endif; ?>
		  <?php if($querys_pdf->propietario != null): ?>
			<div><b>Propietario:</b> <?php echo e($querys_pdf->propietario); ?></div>
		  <?php endif; ?>
		  <?php if($querys_pdf->modelo != null): ?>
			<div><b>Modelo:</b> <?php echo e($querys_pdf->modelo); ?></div>
		  <?php endif; ?>
		  <?php if($querys_pdf->capacidad != null): ?>
			<div><b>Capacidad:</b> <?php echo e($querys_pdf->capacidad); ?></div>
		  <?php endif; ?>
		<?php endif; ?>
		<div><b>Origen:</b> <?php echo e($querys_pdf->origen); ?></div>
		<div><b>Destino:</b> <?php echo e($querys_pdf->destino); ?></div>


</body>
</html>