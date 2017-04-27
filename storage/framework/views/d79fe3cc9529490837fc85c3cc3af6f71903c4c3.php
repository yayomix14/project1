<div id="" class="input-group">
	<span class="input-group-addon">Nombre</span>
		<?php echo Form::text('username', null, ['class' => 'form-control']); ?>

</div>
<br>
<div id="" class="input-group">
	<span class="input-group-addon">Cedula</span>
		<?php echo Form::text('cedula', null, ['class' => 'form-control']); ?>

</div>
<br>
<?php if($verClave): ?>
	<div id="" class="input-group">
		<span class="input-group-addon">Clave</span>
			<?php echo Form::password('password', ['class' => 'form-control']); ?>

	</div>
	<br>
	<div id="" class="input-group">
		<span class="input-group-addon">Repita su clave</span>
			<?php echo Form::password('password_confirmation', ['class' => 'form-control']); ?>

	</div>
	<br>
<?php endif; ?>
<div id="" class="input-group">
	<span class="input-group-addon">Tipo</span>
		<?php echo Form::select('tipo', ['usuario' => 'Usuario', 'admin' => 'Administrador', 'sudo' => 'SuperUsuario'], null, ['placeholder' => 'Elija una opcion', 'class' => 'form-control']); ?>

</div>
<br>
<div class="form-group">
    <div class="input-group">
    <span class="input-group-btn">
    <?php echo Form::button('Limpiar Formulario', ['type' => 'reset', 'class'=>'btn btn-danger']); ?>

    </span>
    	<?php echo Form::submit('Guardar', ['class'=>'btn btn-primary pull-right']); ?>

      </div>
</div>


