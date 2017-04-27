<style>
.titulo{ font-size: 8pt; height: 13pt;}
#marcoVistaPrevia{
    border: 1px solid #008000;
    width: 200px;
    height: 200px;
}
#vistaPrevia{
    max-width: 200px;
    max-height: 200px;            
}

</style>
<link rel="stylesheet" href="/js/select2-4.0.3/dist/css/select2.min.css">
<link rel="stylesheet" href="/docsupport/style.css">
<link rel="stylesheet" href="/docsupport/chosen.css">



<h4>1.- Identificacion del titular de autorizacion</h4>
<div class="input-group has-primary" on="">

	<span class="input-group-addon">Nombre</span>
	<?php echo Form::text('nombre_titular',null,['id'=>'nombre_titular','class'=>'form-control','placeholder'=>'Ejemplo: Nombre']); ?>


	<span class="input-group-addon">Cedula y/O RIF</span>
	<?php echo Form::select('deno_rif', ['v' => 'V', 'j' => 'J'], null,['class' => 'form-control chosen-type', 'placeholder' => 'Seleccione','id'=>'deno_rif','style'=>'width:30%;','required'=>'required']); ?>

	<?php echo Form::number('cedula_rif',null,['id'=>'cedula_rif','class'=>'form-control','placeholder'=>'Ejemplo: 12345678','style'=>'width:70%;']); ?>


</div>


<div class="input-group has-primary" on="">

	<span class="input-group-addon">Domicilio</span>
	<?php echo Form::text('domicilio',null,['id'=>'domicilio','class'=>'form-control','placeholder'=>'Ejemplo: Domicilio']); ?>


</div>

<div class="input-group has-primary" on="">

	<span class="input-group-addon">Telefono</span>
	<?php echo Form::number('telefono',null,['id'=>'telefono','class'=>'form-control','placeholder'=>'Ejemplo: 02xxxxxxxxx']); ?>


	<span class="input-group-addon">Correo Electronico</span>
	<?php echo Form::text('correo',null,['id'=>'correo','class'=>'form-control','placeholder'=>'Ejemplo: correo@correo.com']); ?>


</div>





<h4>2.- Identificación de la empresa</h4>
<div class="input-group has-primary" on="">

	<span class="input-group-addon">Representante legal</span>
	<?php echo Form::text('representante',null,['id'=>'representante','class'=>'form-control','placeholder'=>'Ejemplo: Representante legal']); ?>

    <?php if(isset($querys)): ?>
        <span class="input-group-addon">RIF Empresa</span>
        <?php echo Form::text('rif_empresa','J-',['id'=>'rif_empresa','class'=>'form-control','placeholder'=>'Ejemplo: J-12345678']); ?>

    <?php else: ?>
        <span class="input-group-addon">RIF Empresa</span>
        <?php echo Form::text('rif_empresa',null,['id'=>'rif_empresa','class'=>'form-control','placeholder'=>'Ejemplo: J-12345678']); ?>

    <?php endif; ?>

	<span class="input-group-addon">Razón social</span>
	<?php echo Form::text('razon_social',null,['id'=>'razon_social','class'=>'form-control','placeholder'=>'Ejemplo: Razón social']); ?>

</div>

<div class="input-group has-primary" on="">

	<span class="input-group-addon">Composición</span>
	<?php echo Form::text('composicion',null,['id'=>'composicion','class'=>'form-control','placeholder'=>'Ejemplo: Composición']); ?>


	<span class="input-group-addon">Publica/privada o mixta</span>
	<?php echo Form::select('publica_privada', ['publica' => 'Publica', 'privada' => 'Privada', 'mixta' => 'Mixta'], null,['class' => 'form-control chosen-type', 'placeholder' => 'Seleccione','id'=>'publica_privada','required'=>'required']); ?>


</div>


<h4>3.- Autorización</h4>




<div id="kk" style="color: red; text-align: right;" class="">Monto Excede los 3000 Mts³ Por favor ingrese un monto menor</div>
<div class="input-group has-primary" on="">
    <span class="input-group-addon">Modalidad de explotación</span>
    <?php echo Form::select('modalidad', ['conseciones' => 'Conseciones', 'mineria artesanal' => 'Mineria Artesanal', 'pequeña mineria' => 'Pequeña Mineria','actividades conexas'=>'Actividades Conexas','mancomunidades mineras'=>'Mancomunidades Mineras'], null,['class' => 'form-control chosen-type', 'placeholder' => 'Seleccione','id'=>'modalidad','required'=>'required']); ?>


    <span class="input-group-addon">Area Permisada</span>
    <?php echo Form::number('area',null,['id'=>'area','class'=>'form-control','placeholder'=>'Ejemplo: Ej: 0','onblur'=>'calculo(),calculo_mineral()']); ?>

    <span class="input-group-addon">Mts³</span>

</div>
<script>
$("#kk").hide();
$( "#area,#modalidad" ).blur(function() {
  var modalidad = $("#modalidad").val();
  var area = $("#area").val();
  if(modalidad == 'mineria artesanal' && area >= 3000){
    $("#kk").show(500);
    $("#area").val('0');
  }else{
    $("#kk").hide(500);
  }
});

$( "#modalidad" ).change(function() { 
    var modalidad = $("#modalidad").val();
    if(modalidad == 'actividades conexas'){
        $("#proveedores").prop('disabled', true);
        $("#select_actividades").prop('disabled', true);
        $("#origen").prop('disabled', true);
        $("#area").prop('disabled', true);
    }else{
        $("#proveedores").prop('disabled', false);
        $("#select_actividades").prop('disabled', false);
        $("#origen").prop('disabled', false);
        $("#area").prop('disabled', false);
    }
});
</script>





<div class="input-group has-primary" on="">
	<span class="input-group-addon">Numero de autorización</span>
	<?php echo Form::text('n_autorizacion',null,['id'=>'n_autorizacion','class'=>'form-control','placeholder'=>'Ejemplo: Ej: 001']); ?>

</div>

<div class="input-group has-primary" on="">
    <span class="input-group-addon">Permisos de Aceptación DESDE</span>
    <?php echo Form::date('desde_acep',null,['id'=>'desde_acep','class'=>'form-control']); ?>


    <span class="input-group-addon">HASTA</span>
    <?php echo Form::date('hasta_acep',null,['id'=>'hasta_acep','class'=>'form-control','onchange'=>'cant_meses();']); ?>


    <span class="input-group-addon">T.Meses</span>
    <?php echo Form::text('total_meses',null,['id'=>'total_meses','class'=>'form-control','style'=>'color:blue;','readonly'=>'readonly']); ?>

</div>


<div class="input-group has-primary" on="">
    <span class="input-group-addon">Permisos Ocupación Terr. DESDE</span>
    <?php echo Form::date('desde_ocu',null,['id'=>'desde_ocu','class'=>'form-control']); ?>


    <span class="input-group-addon">HASTA</span>
    <?php echo Form::date('hasta_ocu',null,['id'=>'hasta_ocu','class'=>'form-control','onchange'=>'cant_meses2();']); ?>


    <span class="input-group-addon">T.Meses</span>
    <?php echo Form::text('total_per',null,['id'=>'total_per','class'=>'form-control','style'=>'color:blue;','readonly'=>'readonly']); ?>

</div>



<div class="input-group has-primary" on="">
    <span class="input-group-addon">Duración de la concesión - <b>DESDE</b></span> 
                    <?php echo Form::date('desde', null,['class'=>'form-control','id'=>'desde']); ?>

                


    <span class="input-group-addon"><b>HASTA</b></span> 
                    <?php echo Form::date('hasta', null,['class'=>'form-control','id'=>'hasta']); ?>

</div>
<script>
$(document).ready(function() {
    var date = new Date();
    var hasta = $('#hasta').val();
    var fecha_h = new Date(hasta);
    if(date.getTime() > fecha_h.getTime()){
        $('#hasta').css("color", "red");
    }
            $( "#hasta" ).change(function() {
             if(fecha_h.getTime() <= date.getTime()){
                $('#hasta').css("color", "black");
             }
            });                             
});

function cant_meses(){
    var desde = new Date($("#desde_acep").val());
    var hasta = new Date($("#hasta_acep").val());
    var qty = Math.round(((hasta - desde) / 1000 / 60 / 60 / 24 / 30));
    $("#total_meses").val(qty);
}

function cant_meses2(){
    var desde = new Date($("#desde_ocu").val());
    var hasta = new Date($("#hasta_ocu").val());
    var qty = Math.round(((hasta - desde) / 1000 / 60 / 60 / 24 / 30));
    $("#total_per").val(qty);
}
</script>


<div class="input-group has-primary" on="">

	<span class="input-group-addon">Numero de oficio de entrega de autorización</span>
	<?php echo Form::text('n_oficio',null,['id'=>'n_oficio','class'=>'form-control','placeholder'=>'Ejemplo: oficio']); ?>


	<span class="input-group-addon">Estados del establecimiento</span>
    <?php echo Form::select('e_establecimiento', ['activo' => 'Activo', 'inactivo' => 'Inactivo'], null,['class' => 'form-control chosen-type', 'placeholder' => 'Seleccione','id'=>'e_establecimiento','required'=>'required']); ?>


</div>







<?php /* <h4 class="text-center">Actividades Conexas</h4>
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

    </div> */ ?>







<h4>4.- Identificación cantera</h4>
<div class="input-group has-primary" on="">

	<span class="input-group-addon">Nombre</span>
	<?php echo Form::text('nombre_cantera',null,['id'=>'nombre_cantera','class'=>'form-control','placeholder'=>'Ejemplo: Nombre']); ?>


	<span class="input-group-addon">Ubicación (Municipio)</span>

	<?php echo Form::select('ubicacion', [
	'Acosta'=>'Acosta','Bolivar'=>'Bolivar' ,'Buchivacoa'=>'Buchivacoa','Cacique Manaure'=>'Cacique Manaure','Carirubana'=>'Carirubana' ,'Colina'=>'Colina','Dabajuro'=>'Dabajuro','Democracia'=>'Democracia','Falcon'=>'Falcon' ,'Federacion'=>'Federacion','Jacura'=>'Jacura','Los Taques'=>'Los Taques','Mauroa'=>'Mauroa' ,'Miranda'=>'Miranda','Monsenor Iturriza'=>'Monseñor Iturriza','Palmasola'=>'Palmasola','Petit'=>'Petit','Piritu'=>'Piritu','San Francisco'=>'San Francisco','Silva'=>'Silva','Sucre'=>'Sucre','Tocopero'=>'Tocopero','Union'=>'Union','Urumaco'=>'Urumaco','Zamora'=>'Zamora'], null,['class' => 'form-control chosen-type', 'placeholder' => 'Seleccione','id'=>'ubicacion','required'=>'required','onChange'=>'select_mapa(this)']); ?>



</div>

<div class="input-group has-primary" on="" id="div_hidden">
	<?php echo $__env->make('general.form.condicion', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
</div>

		
	<?php echo $__env->make('general.form.div', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div class="input-group has-primary" on="">

  <span class="input-group-addon">Mineral</span>
  <?php echo Form::select('mineral[]', $groups, null, ['data-placeholder'=>'Seleccione','class'=>'form-control chosen-select', 'multiple','id'=>'mineral','style'=>'width:350px;text-transform:uppercase;','tabindex'=>'4']); ?>            
        
    
    <span class="input-group-addon">Impuesto explotación</span>
    <?php echo Form::number('impuesto',null,['id'=>'impuesto','class'=>'form-control','placeholder'=>'Ejemplo: 0000','onblur'=>'calculo_mineral()']); ?>


    <span class="input-group-addon">Total</span>
    <?php echo Form::number('total_mineral',null,['id'=>'total_mineral','class'=>'form-control','placeholder'=>'Ejemplo: 0000','readonly'=>'readonly']); ?>


</div>


<script src="/js/select2-4.0.3/dist/js/select2.full.min.js" type="text/javascript"></script>
<script type="text/javascript">
$("#mineral").select2();

$("#mineral").on("select2:select", formu_function);
$("#mineral").on("select2:unselect", formu_function);

function calc(obj) {
	var area = parseInt($(obj).closest('div').find('#arregloarea').val());
	var precio = parseInt($(obj).closest('div').find('#arregloprecio').val());
	$(obj).closest('div').find('#arreglototal').val(area * precio);
	console.log(  );
}

function formu_function(){
	

	$('#donde').empty();


	$( ".select2-selection__choice" ).each(function( index ) {
	  //console.log( index + ": " + $( this ).text() );

	  var vari = $( this ).text().split(' - ');
	  var formu = "<div id='minero' class='input-group has-primary' on=''><span class='input-group-addon'>Mineral</span>"+
		"<input id='arreglomineral' value='"+vari[0].replace('×', '')+"' class='form-control' name='arreglomineral[]' type='text' readonly='readonly'>"+

		"<span class='input-group-addon'>Precio</span>"+
		"<input id='arregloprecio' value='"+vari[1]+"'  class='form-control' name='arregloprecio[]' type='number' readonly='readonly'>"+

		"<span class='input-group-addon'>Area</span>"+
		"<input id='arregloarea'  class='form-control' name='arregloarea[]' type='number' onchange='calc(this)'>"+

		"<span class='input-group-addon'>TOTAL</span>"+
		"<input id='arreglototal'  class='form-control' name='arreglototal[]' type='number' readonly='readonly'></div>";
		$('#donde').append(formu);
	  //console.log(vari);
	});
}
	
</script>








<div on="" id="donde">	
	<?php for($i = 0; $i < count($groups_var['groups']); $i++): ?>
		<div id='minero' class='input-group has-primary' on=''>

			<span class='input-group-addon'>Mineral</span>
			<input id='arreglomineral' value="<?php echo e($id->arreglomineral[$i]); ?>" class='form-control' name='arreglomineral[]' type='text' readonly='readonly'>

			<span class='input-group-addon'>Precio</span>
			<input id='arregloprecio' value="<?php echo e($id->arregloprecio[$i]); ?>" class='form-control' name='arregloprecio[]' type='number' readonly='readonly'>

			<span class='input-group-addon'>Area</span>
			<input id='arregloarea' value="<?php echo e($id->arregloarea[$i]); ?>" class='form-control' name='arregloarea[]' type='number' onchange='calc(this)'>

			<span class='input-group-addon'>TOTAL</span>
			<input id='arreglototal' value="<?php echo e($id->arreglototal[$i]); ?>"  class='form-control' name='arreglototal[]' type='number' readonly='readonly'>

		</div>

	<?php endfor; ?>
</div>









<div class="input-group has-primary" on="">

    <span class="input-group-addon">Coordenadas (Latitud)</span>
    <?php echo Form::number('latitud',null,['id'=>'latitud','class'=>'form-control','placeholder'=>'Ejemplo: coordenadas']); ?>


    <span class="input-group-addon">Coordenadas (Longitud)</span>
    <?php echo Form::number('longitud',null,['id'=>'longitud','class'=>'form-control','placeholder'=>'Ejemplo: coordenadas']); ?>


</div>
    



<h4>5.- Inspecciones</h4>
<div class="input-group has-primary" on="">

	<span class="input-group-addon">Fecha</span>
	<?php echo Form::date('fecha_inspecciones',null,['id'=>'fecha_inspecciones','class'=>'form-control']); ?>


</div>
<div class="input-group has-primary" on="">

    <span class="input-group-addon">Observaciones</span>
    <?php echo Form::text('observacion_inspeccion',null,['id'=>'observacion_inspeccion','class'=>'form-control']); ?>


</div>
<div class="input-group has-primary" on="">

    <span class="input-group-addon">Recomendaciones</span>
    <?php echo Form::text('recomendacion_inspeccion',null,['id'=>'recomendacion_inspeccion','class'=>'form-control']); ?>


</div>


<span class="input-group-addon">Imagenes</span>
<div id='botonera'>
    <input type="file" name="imagen" style="display:none;" id="imagen">
	<button type="button" onclick="document.getElementById('imagen').click();" style="position: absolute;margin-left: 3%;margin-top: -3%;" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-upload"></i></button>

    <button class="btn btn-xs btn-danger" id="cancelar" type="button" onclick="activar();" style="position: absolute;margin-left: 8%;margin-top: -3%;"><i class="glyphicon glyphicon-remove"></i></button>
    <a class="btn btn-xs btn-info" style="position: absolute; margin-left: 82%;margin-top: -2.9%;" id="agregar" onclick="panel2_act()"><i class="glyphicon glyphicon-plus"></i></a>
	<?php /* <a class="btn btn-xs btn-danger" style="position: absolute; margin-left: 87.1%;margin-top: -2.9%;" id="minus" onclick="panel2_minus()"><i class="glyphicon glyphicon-minus"></i></a> */ ?>

</div>
    <div class="titulo">
        <span id="infoNombre"></span>
        <span id="infoTamaño"></span>
	</div>
	<?php if(isset($imagens[0]->imagen)): ?>
        <a class="btn btn-lg" data-toggle="modal" data-target="#myModal"><img id="vistaPrevia" src="/imagenes_subidas/<?php echo e($imagens[0]->imagen); ?>" alt=""  /></a>
    <?php else: ?>
    	<img id="vistaPrevia" src="" alt=""/>
    <?php endif; ?>


<div id="panel2">
<a class="btn btn-xs btn-info" style="position: absolute;margin-left: 82%;margin-top: 0.37%;" id="agregar2" onclick="panel3_act()"><i class="glyphicon glyphicon-plus"></i></a>
<a class="btn btn-xs btn-danger" style="position: absolute;margin-left: 87.1%;margin-top: 0.37%;" id="minus2" onclick="panel3_minus()"><i class="glyphicon glyphicon-minus"></i></a>


<span class="input-group-addon">Imagenes - 2</span>
<div id='botonera1'>
    <input type="file" name="imagen2" style="display:none;" id="imagen2">
	<button type="button" onclick="document.getElementById('imagen2').click();" style="position: absolute;margin-left: 3%;margin-top: -3%;" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-upload"></i></button>

    <button class="btn btn-xs btn-danger" id="cancelar1" type="button" onclick="activar();" style="position: absolute;margin-left: 8%;margin-top: -3%;"><i class="glyphicon glyphicon-remove"></i></button>
</div>
    <div class="titulo">
        <span id="infoNombre1"></span>
        <span id="infoTamaño1"></span>
	</div>
	<?php if(isset($imagens[0]->imagen2)): ?>
		<input type="hidden" value="<?php echo e($imagens[0]->imagen2); ?>" id="imagen_2">
        <a class="btn btn-lg" data-toggle="modal" data-target="#myModal2"><img id="vistaPrevia1" src="<?php echo e(asset('imagenes_subidas')); ?>/<?php echo e($imagens[0]->imagen2); ?>" alt=""  /></a>
    <?php else: ?>
    	<img id="vistaPrevia1" src="" alt=""  />
    <?php endif; ?>
</div>







<div id="panel3">
<a class="btn btn-xs btn-info" style="position: absolute;margin-left: 82%;margin-top: 0.37%;" id="agregar3" onclick="panel4_act()"><i class="glyphicon glyphicon-plus"></i></a>
<a class="btn btn-xs btn-danger" style="position: absolute;margin-left: 87.1%;margin-top: 0.37%;" id="minus3" onclick="panel4_minus()"><i class="glyphicon glyphicon-minus"></i></a>

<span class="input-group-addon">Imagenes - 3</span>
<div id='botonera2'>
    <input type="file" name="imagen3" style="display:none;" id="imagen3">
	<button type="button" onclick="document.getElementById('imagen3').click();" style="position: absolute;margin-left: 3%;margin-top: -3%;" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-upload"></i></button>

    <button class="btn btn-xs btn-danger" id="cancelar2" type="button" onclick="activar();" style="position: absolute;margin-left: 8%;margin-top: -3%;"><i class="glyphicon glyphicon-remove"></i></button>
</div>
    <div class="titulo">
        <span id="infoNombre2"></span>
        <span id="infoTamaño2"></span>
	</div>
	<?php if(isset($imagens[0]->imagen3)): ?>
		<input type="hidden" value="<?php echo e($imagens[0]->imagen3); ?>" id="imagen_3">
        <a class="btn btn-lg" data-toggle="modal" data-target="#myModal3"><img id="vistaPrevia2" src="<?php echo e(asset('imagenes_subidas')); ?>/<?php echo e($imagens[0]->imagen3); ?>" alt=""  /></a>
    <?php else: ?>
    	<img id="vistaPrevia2" src="" alt=""  />
    <?php endif; ?>
</div>






<div id="panel4">
<a class="btn btn-xs btn-info" style="position: absolute;margin-left: 82%;margin-top: 0.37%;" id="agregar4" onclick="panel5_act()"><i class="glyphicon glyphicon-plus"></i></a>
<a class="btn btn-xs btn-danger" style="position: absolute;margin-left: 87.1%;margin-top: 0.37%;" id="minus4" onclick="panel5_minus()"><i class="glyphicon glyphicon-minus"></i></a>

    <span class="input-group-addon">Imagenes - 4</span>
<div id='botonera3'>
    <input type="file" name="imagen4" style="display:none;" id="imagen4">
	<button type="button" onclick="document.getElementById('imagen4').click();" style="position: absolute;margin-left: 3%;margin-top: -3%;" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-upload"></i></button>

    <button class="btn btn-xs btn-danger" id="cancelar3" type="button" onclick="activar();" style="position: absolute;margin-left: 8%;margin-top: -3%;"><i class="glyphicon glyphicon-remove"></i></button>
</div>
    <div class="titulo">
        <span id="infoNombre3"></span>
        <span id="infoTamaño3"></span>
	</div>
	<?php if(isset($imagens[0]->imagen4)): ?>
		<input type="hidden" value="<?php echo e($imagens[0]->imagen4); ?>" id="imagen_4">
        <a class="btn btn-lg" data-toggle="modal" data-target="#myModal4"><img id="vistaPrevia3" src="<?php echo e(asset('imagenes_subidas')); ?>/<?php echo e($imagens[0]->imagen4); ?>" alt=""  /></a>
    <?php else: ?>
    	<img id="vistaPrevia3" src="" alt=""  />
    <?php endif; ?>
</div>







<div id="panel5">
<?php /* <a class="btn btn-xs btn-info" style="position: absolute;margin-left: 82%;margin-top: 0.37%;" id="agregar5" onclick="panel6_act()"><i class="glyphicon glyphicon-plus"></i></a>
 */ ?><a class="btn btn-xs btn-danger" style="position: absolute;margin-left: 87.1%;margin-top: 0.37%;" id="minus5" onclick="panel6_minus()"><i class="glyphicon glyphicon-minus"></i></a>

    <span class="input-group-addon">Imagenes - 5</span>
<div id='botonera4'>
    <input type="file" name="imagen5" style="display:none;" id="imagen5">
    <button type="button" onclick="document.getElementById('imagen5').click();" style="position: absolute;margin-left: 3%;margin-top: -3%;" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-upload"></i></button>

    <button class="btn btn-xs btn-danger" id="cancelar4" type="button" onclick="activar();" style="position: absolute;margin-left: 8%;margin-top: -3%;"><i class="glyphicon glyphicon-remove"></i></button>
</div>
    <div class="titulo">
        <span id="infoNombre4"></span>
        <span id="infoTamaño4"></span>
    </div>
    <?php if(isset($imagens[0]->imagen5)): ?>
        <input type="hidden" value="<?php echo e($imagens[0]->imagen5); ?>" id="imagen_5">
        <a class="btn btn-lg" data-toggle="modal" data-target="#myModal5"><img id="vistaPrevia4" src="<?php echo e(asset('imagenes_subidas')); ?>/<?php echo e($imagens[0]->imagen5); ?>" alt=""  /></a>
    <?php else: ?>
        <img id="vistaPrevia4" src="" alt="" />
    <?php endif; ?>
</div>


<h4>6.- Ventajas especiales</h4>
<div class="input-group has-primary" on="">

	<?php /* <span class="input-group-addon">Fecha</span>
	<?php echo Form::date('fecha_ventajas',null,['id'=>'fecha_ventajas','class'=>'form-control','accept-charset'=>'UTF-8','enctype'=>'multipart/form-data']); ?> */ ?>
		
	<span class="input-group-addon">Observaciones</span>
	<?php echo Form::text('o_inspecciones',null,['id'=>'o_inspecciones','class'=>'form-control','placeholder'=>'Ejemplo: Observacion']); ?>


	<span class="input-group-addon">Monto</span>
	<?php echo Form::number('monto_ventajas',null,['id'=>'monto_ventajas','class'=>'form-control','placeholder'=>'0000','onblur'=>'calculo()']); ?>


    <span class="input-group-addon">Total</span>
    <?php echo Form::number('total_ventajas',null,['id'=>'total_ventajas','class'=>'form-control','placeholder'=>'0000','readonly'=>'readonly']); ?>

    <span class="input-group-addon">Bs</span>

</div>






<h4>7.- Sanciones</h4>
<div class="input-group has-primary" on="">
    <span class="input-group-addon">Infracción</span>
    <?php echo Form::text('infraccion',null,['id'=>'infraccion','class'=>'form-control','placeholder'=>'Infracción']); ?>

    <span class="input-group-addon">Monto UT</span>
    <?php echo Form::number('montout',null,['id'=>'montout','class'=>'form-control','placeholder'=>'Monto UT']); ?>

    <span class="input-group-addon">Monto Bs</span>
    <?php echo Form::number('montobs',null,['id'=>'montobs','class'=>'form-control','placeholder'=>'Monto Bs']); ?>

</div>

<div class="input-group has-primary" on="">
    <span class="input-group-addon">Fecha</span>
    <?php echo Form::date('fecha_sancion',null,['id'=>'fecha_sancion','class'=>'form-control']); ?>

    <span class="input-group-addon">Pago</span>
    <?php echo Form::select('pago_sancion', ['si' => 'Si', 'no' => 'No'], null,['class' => 'form-control chosen-type', 'placeholder' => 'Seleccione','id'=>'pago_sancion','required'=>'required']); ?>

    <span class="input-group-addon">Numero Acta</span>
    <?php echo Form::text('numero_acta',null,['id'=>'numero_acta','class'=>'form-control','placeholder'=>'Numero Acta']); ?>

</div>


<h5 id="alerta" style="color: red;" class="pull-right">Imagen supera los 2MB, cargue una imagen con menor peso</h5>
<br>





<script src="/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>



<script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      //$(selector).chosen(config[selector]);
    }
</script>
<script src="<?php echo e(url('js')); ?>/procesar_imagen.js"></script>
<script src="<?php echo e(url('js')); ?>/daterangepicker.js"></script>
<script src="<?php echo e(url('js')); ?>/mapas.js"></script>


<script>

$( "#mineral" ).change(function() {
  var pp = $('#mineral').val();
  for(i in pp){
        var posicion_for=pp[i]
        /*if (posicion_for=='piedra') {
            alert('111');
        }else if(posicion_for=='granito'){
            alert('222');
        }*/
    }
});

var area = document.getElementById('area').value;
var monto_ventajas = document.getElementById('monto_ventajas').value;
    if(monto_ventajas == ''){
        var monto_ventajas = 0;
    }
    tt = eval(area)*eval(monto_ventajas);
    document.getElementById('total_ventajas').value = tt;
    if(document.getElementById('total_ventajas').value == ''){
        document.getElementById('total_ventajas').value = 0;
    }
function calculo(){
    var area = document.getElementById('area').value;
    var monto_ventajas = document.getElementById('monto_ventajas').value;
    if(monto_ventajas == ''){
        var monto_ventajas = 0;
    }
    tt = eval(area)*eval(monto_ventajas);
    document.getElementById('total_ventajas').value = tt;
} 













var area = document.getElementById('area').value;
var impuesto = document.getElementById('impuesto').value;
    if(impuesto == ''){
        var impuesto = 0;
    }
    dd = eval(area)*eval(impuesto);
    document.getElementById('total_mineral').value = dd;
    if(document.getElementById('total_mineral').value == ''){
        document.getElementById('total_mineral').value = 0;
    }


function calculo_mineral(){
    var area = document.getElementById('area').value;
    var impuesto = document.getElementById('impuesto').value;
    if(impuesto == ''){
        var impuesto = 0;
    }
    dd = eval(area)*eval(impuesto);
    document.getElementById('total_mineral').value = dd;

} 

</script>

