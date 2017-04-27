<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte - General</title>
	<style>
		h4{
			text-transform: uppercase;
			font-size: 13px;
		}
		div{
			font-size: 12px;
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
	<h4>1.- Identificación del titular de autorización</h4>
		<div><b>Nombre:</b> <?php echo e($querys_pdf->nombre_titular); ?></div>
		<div><b>Cedula y/o RIF:</b> <?php echo e($querys_pdf->cedula_rif); ?></div>
		<div><b>Domicilio:</b> <?php echo e($querys_pdf->domicilio); ?></div>
		<div><b>Teléfono:</b> <?php echo e($querys_pdf->telefono); ?></div>
		<div><b>Correo Electrónico:</b> <?php echo e($querys_pdf->correo); ?></div>

	<h4>2.- Identificación de la empresa</h4>
		<div><b>Representante Legal:</b> <?php echo e($querys_pdf->representante); ?></div>
		<div><b>Razón Social:</b> <?php echo e($querys_pdf->razon_social); ?></div>
		<div><b>Composición Accionaria:</b> <?php echo e($querys_pdf->composición); ?></div>
		<div><b>Pública/Privada o Mixta:</b> <?php echo e($querys_pdf->publica_privada); ?></div>

	<h4>3.- autorización</h4>
		<div><b>Número de Autorización:</b> <?php echo e($querys_pdf->n_autorización); ?></div>
		<div><b>Duración de la Concesión:</b> <?php echo e($querys_pdf->d_concesion); ?></div>
		<div><b>Número de Oficio de Entrega de Autorización:</b> <?php echo e($querys_pdf->n_oficio); ?></div>
		<div><b>Estados del Establecimiento:</b> <?php echo e($querys_pdf->e_establecimiento); ?></div>

	<h4>4.- Identificación Cantera</h4>
		<div><b>Nombre:</b> <?php echo e($querys_pdf->nombre_cantera); ?></div>
		<div><b>Ubicación:</b> <?php echo e($querys_pdf->ubcacion); ?></div>
		<div><b>Mineral:</b> <?php echo e($querys_pdf->mineral); ?></div>
		<div><b>Coordenadas de Ubicación:</b> <?php echo e($querys_pdf->coordenadas); ?></div>
	

	<?php if($querys_pdf->ubicacion=='Acosta'): ?>
		<img src="mapas/acosta.png" alt="Municipio Acosta" class="">
	<?php elseif($querys_pdf->ubicacion=='Bolivar'): ?>
		<img src="mapas/bolivar.png" alt="Municipio Bolivar" class="">
	<?php elseif($querys_pdf->ubicacion=='Buchivacoa'): ?>
		<img src="mapas/buchivacoa.png" alt="Municipio Buchivacoa" class="">
	<?php elseif($querys_pdf->ubicacion=='Cacique Manaure'): ?>
		<img src="mapas/cacique_manaure.png" alt="Municipio Cacique Manaure" class=""> 
	<?php elseif($querys_pdf->ubicacion=='Carirubana'): ?>
		<img src="mapas/carirubana.png" alt="Municipio Carirubana" class="">
	<?php elseif($querys_pdf->ubicacion=='Colina'): ?>
		<img src="mapas/colina.png" alt="Municipio Colina" class="">
	<?php elseif($querys_pdf->ubicacion=='Dabajuro'): ?>
		<img src="mapas/dabajuro.png" alt="Municipio Dabajuro" class="">
	<?php elseif($querys_pdf->ubicacion=='Democracia'): ?>
		<img src="mapas/democracia.png" alt="Municipio Democracia" class="">
	<?php elseif($querys_pdf->ubicacion=='Falcon'): ?>
		<img src="mapas/falcon.png" alt="Municipio Falcon" class="">
	<?php elseif($querys_pdf->ubicacion=='Federacion'): ?>
		<img src="mapas/federacion.png" alt="Municipio Federacion" class="">
	<?php elseif($querys_pdf->ubicacion=='Jacura'): ?>
		<img src="mapas/jacura.png" alt="Municipio Jacura" class="">
	<?php elseif($querys_pdf->ubicacion=='Los Taques'): ?>
		<img src="mapas/los_taques.png" alt="Municipio Los Taques" class="">
	<?php elseif($querys_pdf->ubicacion=='Mauroa'): ?>
		<img src="mapas/mauroa.png" alt="Municipio Mauroa" class="">
	<?php elseif($querys_pdf->ubicacion=='Miranda'): ?>
		<img src="mapas/miranda.png" alt="Municipio Miranda" class="">
	<?php elseif($querys_pdf->ubicacion=='Monseñor Iturriza'): ?>
		<img src="mapas/monsenor_iturriza.png" alt="Municipio Monsenor Iturriza" class="">
	<?php elseif($querys_pdf->ubicacion=='Palmasola'): ?>
		<img src="mapas/palmasola.png" alt="Municipio Palmasola" class="">
	<?php elseif($querys_pdf->ubicacion=='Petit'): ?>
		<img src="mapas/petit.png" alt="Municipio Petit" class="">
	<?php elseif($querys_pdf->ubicacion=='Piritu'): ?>
		<img src="mapas/piritu.png" alt="Municipio Piritu" class="">
	<?php elseif($querys_pdf->ubicacion=='San Francisco'): ?>
		<img src="mapas/san_francisco.png" alt="Municipio San Francisco" class="">
	<?php elseif($querys_pdf->ubicacion=='Silva'): ?>
		<img src="mapas/silva.png" alt="Municipio Silva" class="">
	<?php elseif($querys_pdf->ubicacion=='Sucre'): ?>
		<img src="mapas/sucre.png" alt="Municipio Sucre" class="">
	<?php elseif($querys_pdf->ubicacion=='Tocopero'): ?>
		<img src="mapas/tocopero.png" alt="Municipio Tocopero" class="">
	<?php elseif($querys_pdf->ubicacion=='Union'): ?>
		<img src="mapas/union.png">
	<?php elseif($querys_pdf->ubicacion=='Urumaco'): ?>
		<img src="mapas/urumaco.png" alt="Municipio Urumaco" class="">
	<?php elseif($querys_pdf->ubicacion=='Zamora'): ?>
		<img src="mapas/zamora.png" alt="Municipio Zamora" class="">
	<?php endif; ?>


	<h4>5.- Inspecciones</h4>
		<div><b>Fecha:</b> <?php echo e($querys_pdf->fecha_inspecciones); ?></div>
		<div><b>Observaciones:</b> <?php echo e($querys_pdf->o_inspecciones); ?></div>

	<h4>6.- Ventajas Especiales</h4>
		<div><b>Fecha:</b> <?php echo e($querys_pdf->fecha_ventajas); ?></div>
		<div><b>Monto:</b> <?php echo e($querys_pdf->monto_ventajas); ?></div>

	<h4>7.- Actividades Conexas</h4>
		<div><b>Principales Proveedores:</b> <?php echo e($querys_pdf->proveedores); ?></div>


</body>
</html>