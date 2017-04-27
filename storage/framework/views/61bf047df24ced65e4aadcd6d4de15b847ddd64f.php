<h4>Identificación del titular de autorización</h4>
<div class="input-group has-primary" on="">

	<span class="input-group-addon">Nombre</span>
	<?php echo Form::text('nombre_titular',null,['id'=>'nombre_titular','class'=>'form-control','placeholder'=>'Ejemplo: Nombre']); ?>


	<span class="input-group-addon">Cedula y/O RIF</span>
	<?php echo Form::text('cedula_rif',null,['id'=>'cedula_rif','class'=>'form-control','placeholder'=>'Ejemplo: cedula_rif']); ?>


</div>


<div class="input-group has-primary" on="">

	<span class="input-group-addon">Domicilio</span>
	<?php echo Form::text('domicilio',null,['id'=>'domicilio','class'=>'form-control','placeholder'=>'Ejemplo: Domicilio']); ?>


</div>

<div class="input-group has-primary" on="">

	<span class="input-group-addon">Telefono</span>
	<?php echo Form::text('telefono',null,['id'=>'telefono','class'=>'form-control','placeholder'=>'Ejemplo: Telefono']); ?>


	<span class="input-group-addon">Correo Electronico</span>
	<?php echo Form::text('correo',null,['id'=>'correo','class'=>'form-control','placeholder'=>'Ejemplo: correo@correo.com']); ?>


</div>





<h4>Identificación de la empresa</h4>
<div class="input-group has-primary" on="">

	<span class="input-group-addon">Representante legal</span>
	<?php echo Form::text('representante',null,['id'=>'representante','class'=>'form-control','placeholder'=>'Ejemplo: Nombre']); ?>


	<span class="input-group-addon">Razón social</span>
	<?php echo Form::text('razon_social',null,['id'=>'razon_social','class'=>'form-control','placeholder'=>'Ejemplo: razon_social']); ?>

</div>

<div class="input-group has-primary" on="">

	<span class="input-group-addon">Composición</span>
	<?php echo Form::text('composicion',null,['id'=>'composicion','class'=>'form-control','placeholder'=>'Ejemplo: Composición']); ?>


	<span class="input-group-addon">Publica/privada o mixta</span>
	<?php echo Form::text('publica_privada',null,['id'=>'publica_privada','class'=>'form-control','placeholder'=>'Ejemplo: publica_privada']); ?>


</div>


<h4>Autorización</h4>
<div class="input-group has-primary" on="">

	<span class="input-group-addon">Numero de autorización</span>
	<?php echo Form::text('n_autorizacion',null,['id'=>'n_autorizacion','class'=>'form-control','placeholder'=>'Ejemplo: Nombre']); ?>


	<span class="input-group-addon">Duración de la concesión</span>
	<?php echo Form::text('d_concesion',null,['id'=>'d_concesion','class'=>'form-control','placeholder'=>'Ejemplo: d_concesion']); ?>

</div>

<div class="input-group has-primary" on="">

	<span class="input-group-addon">Numero de oficio de entrega de autorización</span>
	<?php echo Form::text('n_oficio',null,['id'=>'n_oficio','class'=>'form-control','placeholder'=>'Ejemplo: oficio']); ?>


	<span class="input-group-addon">Estados del establecimiento</span>
	<?php echo Form::text('e_establecimiento',null,['id'=>'e_establecimiento','class'=>'form-control','placeholder'=>'Ejemplo: e_establecimiento']); ?>


</div>


<h4>Identificación cantera</h4>
<div class="input-group has-primary" on="">

	<span class="input-group-addon">Nombre</span>
	<?php echo Form::text('nombre_cantera',null,['id'=>'nombre_cantera','class'=>'form-control','placeholder'=>'Ejemplo: Nombre']); ?>


	<span class="input-group-addon">Ubicación</span>
	<?php echo Form::text('ubicacion',null,['id'=>'ubicacion','class'=>'form-control','placeholder'=>'Ejemplo: ubicacion']); ?>

</div>

<div class="input-group has-primary" on="">

	<span class="input-group-addon">Mineral</span>
	<?php echo Form::text('mineral',null,['id'=>'mineral','class'=>'form-control','placeholder'=>'Ejemplo: Mineral']); ?>


	<span class="input-group-addon">Coordenadas de ubicación</span>
	<?php echo Form::text('coordenadas',null,['id'=>'coordenadas','class'=>'form-control','placeholder'=>'Ejemplo: coordenadas']); ?>


</div>
