

$("#select_actividades_add").hide();
$("#select_actividades_add2").hide();
$("#select_actividades_add3").hide();

jQuery('#select_actividades').on('click', function(e) {
    var select_actividades_add = $('select[name=select_actividades]').val();
    if (select_actividades_add == 'transporte') {
        $("#select_actividades_add").show(700);
        $("#select_actividades_add2").show(700);
        $("#select_actividades_add3").show(700);
    }else{
        $("#select_actividades_add").hide(700);
        $("#select_actividades_add3").hide(700);
        $("#select_actividades_add2").show(700);
    }
});
$(document).ready(function() {
    var select_actividades_add = $('select[name=select_actividades]').val();
    if (select_actividades_add == 'transporte') {
        $("#select_actividades_add").show();
        $("#select_actividades_add2").show();
        $("#select_actividades_add3").show();
    }else{
        $("#select_actividades_add").hide();
        $("#select_actividades_add2").show();
        $("#select_actividades_add3").hide();
    }
});







$(document).ready(function() {
    $('#vistaPrevia1').css({ 'width':'200px', 'height':'100px' });
    $('#vistaPrevia2').css({ 'width':'200px', 'height':'100px' });
    $('#vistaPrevia3').css({ 'width':'200px', 'height':'100px' });
    $('#vistaPrevia4').css({ 'width':'200px', 'height':'100px' });
});


////////////////////////////////////////////////////////////////////////////////////
var imagen_2 = $("#imagen_2").val();
var imagen_3 = $("#imagen_3").val();
var imagen_4 = $("#imagen_4").val();
var imagen_5 = $("#imagen_5").val();
if ( $("#create") ) {
    if (imagen_2 == undefined) {
        $("#panel2").hide();
        $("#agregar2").show();
        $("#minus2").show();
    }
    if (imagen_3 == undefined) {
        $("#panel3").hide();
        $("#agregar3").show();
        $("#minus3").show();
    }
    if (imagen_4 == undefined) {
        $("#panel4").hide();
        $("#agregar4").show();
        $("#minus4").show();
    }
    if (imagen_5 == undefined) {
        $("#panel5").hide();
        $("#agregar5").show();
        $("#minus5").show();
    }
}
if ($("#edit")) {
    if (imagen_2 == '') {
        $("#panel2").hide();
        $("#agregar2").show();
        $("#minus2").show();
    }
    if (imagen_3 == '') {
        $("#panel3").hide();
        $("#agregar3").show();
        $("#minus3").show();
    }
    if (imagen_4 == '') {
        $("#panel4").hide();
        $("#agregar4").show();
        $("#minus4").show();
    }
    if (imagen_5 == '') {
        $("#panel5").hide();
        $("#agregar5").show();
        $("#minus5").show();
    }
}
/////////////////////////////////////////////////////////////////////////////////////

function panel2_act(){
    $("#panel2").show(700);
    $("#agregar").hide(700);
    $("#agregar2").show(700);
    $("#minus2").show(700);
}
/*function panel2_minus(){
    $("#panel2").hide(700);
    $("#agregar").show(700);
    $("#agregar2").hide(700);
    $("#minus2").hide(700);
}*/


function panel3_act(){
    $("#panel3").show(700);
    $("#agregar").hide(700);
    $("#agregar3").show(700);
    $("#minus3").show(700);
}
function panel3_minus(){
    $("#panel2").hide(700);
    $("#agregar").show(700);
    //$("#agregar3").hide(700);
    //$("#minus3").hide(700);
}


function panel4_act(){
    $("#panel4").show(700);
    $("#agregar").hide(700);
    $("#agregar4").show(700);
    $("#minus4").show(700);
}
function panel4_minus(){
    $("#panel3").hide(700);
    //$("#agregar4").hide(700);
    //$("#minus4").hide(700);
}

function panel5_act(){
    $("#panel5").show(700);
    $("#agregar").hide(700);
    $("#agregar5").show(700);
    $("#minus5").show(700);
}
function panel5_minus(){
    $("#panel4").hide(700);
    $("#agregar5").hide(700);
    //$("#minus5").hide(700);
}

function panel6_act(){
    $("#panel6").show(700);
    $("#agregar").hide(700);
    $("#agregar6").show(700);
    $("#minus6").show(700);
}
function panel6_minus(){
    $("#panel5").hide(700);
    $("#agregar6").hide(700);
    $("#minus6").hide(700);
}




/*DIVS IMAGENES*/







function activar(){ 

        $('#boton').attr("disabled", false); // boton enviar formulario
        $("#alerta").hide(); //mostrar div alerta

}




//Este string contiene una imagen de 1px*1px color blanco
$("#alerta").hide(); //ocultar div alerta
window.imagenVacia = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

window.mostrarVistaPrevia = function mostrarVistaPrevia() {

    var Archivos, Lector;

    //Para navegadores antiguos
    if (typeof FileReader !== "function") {
        jQuery('#infoNombre').text('[Vista previa no disponible]');
        jQuery('#infoTamaño').text('(su navegador no soporta vista previa!)');
        return;
    }

    Archivos = jQuery('#imagen')[0].files;
    if (Archivos.length > 0) {

        Lector = new FileReader();
        Lector.onloadend = function(e) {
            var origen, tipo;

            //Envia la imagen a la pantalla
            origen = e.target; //objeto FileReader
            //Prepara la información sobre la imagen
            tipo = window.obtenerTipoMIME(origen.result.substring(0, 30));

            jQuery('#infoNombre').text(Archivos[0].name + ' (Tipo: ' + tipo + ')');
            jQuery('#infoTamaño').text('Tamaño: ' + e.total + ' bytes');
            //Si el tipo de archivo es válido lo muestra, 
            //sino muestra un mensaje 
            if (tipo !== 'image/jpeg' && tipo !== 'image/png' && tipo !== 'image/gif') {
                jQuery('#vistaPrevia').attr('src', window.imagenVacia);
                alert('El formato de imagen no es válido: debe seleccionar una imagen JPG, PNG o GIF.');
            } else {
                jQuery('#vistaPrevia').attr('src', origen.result);
                window.obtenerMedidas();
            }

    if (e.total >= 2097152) {
        alert('DEBE CARGAR UNA IMAGEN MENOR O IGUAL A 2 MEGAS'); 
        $('#boton').attr("disabled", true);
        $("#alerta").show(); //mostrar div alerta
        //$("#vistaPrevia").hide();
    }else{

        $('#boton').attr("disabled", false);
        $("#alerta").hide(); //mostrar div alerta

    }

        };
        Lector.onerror = function(e) {
            console.log(e)
        }
        Lector.readAsDataURL(Archivos[0]);

    } else {
        var objeto = jQuery('#imagen');
        objeto.replaceWith(objeto.val('').clone());
        jQuery('#vistaPrevia').attr('src', window.imagenVacia);
        jQuery('#infoNombre').text('[Seleccione una imagen]');
        jQuery('#infoTamaño').text('');
    };


};

//Lee el tipo MIME de la cabecera de la imagen
window.obtenerTipoMIME = function obtenerTipoMIME(cabecera) {
    return cabecera.replace(/data:([^;]+).*/, '\$1');
}

//Obtiene las medidas de la imagen y las agrega a la 
//etiqueta infoTamaño
window.obtenerMedidas = function obtenerMedidas() {
    jQuery('<img/>').bind('load', function(e) {

        var tamaño = jQuery('#infoTamaño').text() + '; Medidas: ' + this.width + 'x' + this.height;

        jQuery('#infoTamaño').text(tamaño);

    }).attr('src', jQuery('#vistaPrevia').attr('src'));
}

jQuery(document).ready(function() {

    //Cargamos la imagen "vacía" que actuará como Placeholder
    //jQuery('#vistaPrevia').attr('src', window.imagenVacia);

    //El input del archivo lo vigilamos con un "delegado"
    jQuery('#botonera').on('change', '#imagen', function(e) {
        window.mostrarVistaPrevia();
    });

    //El botón Cancelar lo vigilamos normalmente
    jQuery('#cancelar').on('click', function(e) {
        var objeto = jQuery('#imagen');
        objeto.replaceWith(objeto.val('').clone());

        jQuery('#vistaPrevia').attr('src', window.imagenVacia);
        jQuery('#infoNombre').text('');
        jQuery('#infoTamaño').text('');
    });

});










































/*2DA IMAGEN*/






window.imagenVacia1 = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

window.mostrarVistaPrevia1 = function mostrarVistaPrevia1() {

    var Archivos1, Lector1;

    //Para navegadores antiguos
    if (typeof FileReader !== "function") {
        jQuery('#infoNombre1').text('[Vista previa no disponible]');
        jQuery('#infoTamaño1').text('(su navegador no soporta vista previa!)');
        return;
    }

    Archivos1 = jQuery('#imagen2')[0].files;
    if (Archivos1.length > 0) {

        Lector1 = new FileReader();
        Lector1.onloadend = function(e) {
            var origen1, tipo1;

            //Envia la imagen a la pantalla
            origen1 = e.target; //objeto FileReader
            //Prepara la información sobre la imagen
            tipo1 = window.obtenerTipoMIME1(origen1.result.substring(0, 30));

            jQuery('#infoNombre1').text(Archivos1[0].name + ' (Tipo: ' + tipo1 + ')');
            jQuery('#infoTamaño1').text('Tamaño: ' + e.total + ' bytes');
            //Si el tipo de archivo es válido lo muestra, 
            //sino muestra un mensaje 
            if (tipo1 !== 'image/jpeg' && tipo1 !== 'image/png' && tipo1 !== 'image/gif') {
                jQuery('#vistaPrevia1').attr('src', window.imagenVacia1);
                alert('El formato de imagen no es válido: debe seleccionar una imagen JPG, PNG o GIF.');
            } else {
                jQuery('#vistaPrevia1').attr('src', origen1.result);
                window.obtenerMedidas1();
            }

    if (e.total >= 2097152) {
        alert('DEBE CARGAR UNA IMAGEN MENOR O IGUAL A 2 MEGAS'); 
        $('#boton').attr("disabled", true);
        $("#alerta").show(); //mostrar div alerta
        //$("#vistaPrevia1").hide();
    }else{

        $('#boton').attr("disabled", false);
        $("#alerta").hide(); //mostrar div alerta

    }

        };
        Lector1.onerror = function(e) {
            console.log(e)
        }
        Lector1.readAsDataURL(Archivos1[0]);

    } else {
        var objeto = jQuery('#imagen2');
        objeto.replaceWith(objeto.val('').clone());
        jQuery('#vistaPrevia1').attr('src', window.imagenVacia1);
        jQuery('#infoNombre1').text('[Seleccione una imagen]');
        jQuery('#infoTamaño1').text('');
    };


};

//Lee el tipo MIME de la cabecera de la imagen
window.obtenerTipoMIME1 = function obtenerTipoMIME1(cabecera) {
    return cabecera.replace(/data:([^;]+).*/, '\$1');
}

//Obtiene las medidas de la imagen y las agrega a la 
//etiqueta infoTamaño
window.obtenerMedidas1 = function obtenerMedidas1() {
    jQuery('<img/>').bind('load', function(e) {

        var tamaño = jQuery('#infoTamaño1').text() + '; Medidas: ' + this.width + 'x' + this.height;

        jQuery('#infoTamaño1').text(tamaño);

    }).attr('src', jQuery('#vistaPrevia1').attr('src'));
}

jQuery(document).ready(function() {

    //Cargamos la imagen "vacía" que actuará como Placeholder
    //jQuery('#vistaPrevia').attr('src', window.imagenVacia1);

    //El input del archivo lo vigilamos con un "delegado"
    jQuery('#botonera1').on('change', '#imagen2', function(e) {
        window.mostrarVistaPrevia1();
    });

    //El botón Cancelar lo vigilamos normalmente
    jQuery('#cancelar1').on('click', function(e) {
        var objeto = jQuery('#imagen2');
        objeto.replaceWith(objeto.val('').clone());

        jQuery('#vistaPrevia1').attr('src', window.imagenVacia1);
        jQuery('#infoNombre1').text('');
        jQuery('#infoTamaño1').text('');
    });

});





















/*3RA IMAGEN*/






window.imagenVacia2 = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

window.mostrarVistaPrevia2 = function mostrarVistaPrevia2() {

    var Archivos2, Lector2;

    //Para navegadores antiguos
    if (typeof FileReader !== "function") {
        jQuery('#infoNombre2').text('[Vista previa no disponible]');
        jQuery('#infoTamaño2').text('(su navegador no soporta vista previa!)');
        return;
    }

    Archivos2 = jQuery('#imagen3')[0].files;
    if (Archivos2.length > 0) {

        Lector2 = new FileReader();
        Lector2.onloadend = function(e) {
            var origen2, tipo2;

            //Envia la imagen a la pantalla
            origen2 = e.target; //objeto FileReader
            //Prepara la información sobre la imagen
            tipo2 = window.obtenerTipoMIME2(origen2.result.substring(0, 30));

            jQuery('#infoNombre2').text(Archivos2[0].name + ' (Tipo: ' + tipo2 + ')');
            jQuery('#infoTamaño2').text('Tamaño: ' + e.total + ' bytes');
            //Si el tipo de archivo es válido lo muestra, 
            //sino muestra un mensaje 
            if (tipo2 !== 'image/jpeg' && tipo2 !== 'image/png' && tipo2 !== 'image/gif') {
                jQuery('#vistaPrevia2').attr('src', window.imagenVacia2);
                alert('El formato de imagen no es válido: debe seleccionar una imagen JPG, PNG o GIF.');
            } else {
                jQuery('#vistaPrevia2').attr('src', origen2.result);
                window.obtenerMedidas2();
            }

    if (e.total >= 2097152) {
        alert('DEBE CARGAR UNA IMAGEN MENOR O IGUAL A 2 MEGAS'); 
        $('#boton').attr("disabled", true);
        $("#alerta").show(); //mostrar div alerta
        //$("#vistaPrevia2").hide();
    }else{

        $('#boton').attr("disabled", false);
        $("#alerta").hide(); //mostrar div alerta

    }

        };
        Lector2.onerror = function(e) {
            console.log(e)
        }
        Lector2.readAsDataURL(Archivos2[0]);

    } else {
        var objeto = jQuery('#imagen3');
        objeto.replaceWith(objeto.val('').clone());
        jQuery('#vistaPrevia2').attr('src', window.imagenVacia2);
        jQuery('#infoNombre2').text('[Seleccione una imagen]');
        jQuery('#infoTamaño2').text('');
    };


};

//Lee el tipo MIME de la cabecera de la imagen
window.obtenerTipoMIME2 = function obtenerTipoMIME2(cabecera) {
    return cabecera.replace(/data:([^;]+).*/, '\$1');
}

//Obtiene las medidas de la imagen y las agrega a la 
//etiqueta infoTamaño
window.obtenerMedidas2 = function obtenerMedidas2() {
    jQuery('<img/>').bind('load', function(e) {

        var tamaño = jQuery('#infoTamaño2').text() + '; Medidas: ' + this.width + 'x' + this.height;

        jQuery('#infoTamaño2').text(tamaño);

    }).attr('src', jQuery('#vistaPrevia2').attr('src'));
}

jQuery(document).ready(function() {

    //Cargamos la imagen "vacía" que actuará como Placeholder
    //jQuery('#vistaPrevia').attr('src', window.imagenVacia2);

    //El input del archivo lo vigilamos con un "delegado"
    jQuery('#botonera2').on('change', '#imagen3', function(e) {
        window.mostrarVistaPrevia2();
    });

    //El botón Cancelar lo vigilamos normalmente
    jQuery('#cancelar2').on('click', function(e) {
        var objeto = jQuery('#imagen3');
        objeto.replaceWith(objeto.val('').clone());

        jQuery('#vistaPrevia2').attr('src', window.imagenVacia2);
        jQuery('#infoNombre2').text('');
        jQuery('#infoTamaño2').text('');
    });

});




















/*4TA IMAGEN*/






window.imagenVacia3 = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

window.mostrarVistaPrevia3 = function mostrarVistaPrevia3() {

    var Archivos3, Lector3;

    //Para navegadores antiguos
    if (typeof FileReader !== "function") {
        jQuery('#infoNombre3').text('[Vista previa no disponible]');
        jQuery('#infoTamaño3').text('(su navegador no soporta vista previa!)');
        return;
    }

    Archivos3 = jQuery('#imagen4')[0].files;
    if (Archivos3.length > 0) {

        Lector3 = new FileReader();
        Lector3.onloadend = function(e) {
            var origen3, tipo3;

            //Envia la imagen a la pantalla
            origen3 = e.target; //objeto FileReader
            //Prepara la información sobre la imagen
            tipo3 = window.obtenerTipoMIME3(origen3.result.substring(0, 30));

            jQuery('#infoNombre3').text(Archivos3[0].name + ' (Tipo: ' + tipo3 + ')');
            jQuery('#infoTamaño3').text('Tamaño: ' + e.total + ' bytes');
            //Si el tipo de archivo es válido lo muestra, 
            //sino muestra un mensaje 
            if (tipo3 !== 'image/jpeg' && tipo3 !== 'image/png' && tipo3 !== 'image/gif') {
                jQuery('#vistaPrevia3').attr('src', window.imagenVacia3);
                alert('El formato de imagen no es válido: debe seleccionar una imagen JPG, PNG o GIF.');
            } else {
                jQuery('#vistaPrevia3').attr('src', origen3.result);
                window.obtenerMedidas3();
            }

    if (e.total >= 2097152) {
        alert('DEBE CARGAR UNA IMAGEN MENOR O IGUAL A 2 MEGAS'); 
        $('#boton').attr("disabled", true);
        $("#alerta").show(); //mostrar div alerta
        //$("#vistaPrevia3").hide();
    }else{

        $('#boton').attr("disabled", false);
        $("#alerta").hide(); //mostrar div alerta

    }

        };
        Lector3.onerror = function(e) {
            console.log(e)
        }
        Lector3.readAsDataURL(Archivos3[0]);

    } else {
        var objeto = jQuery('#imagen4');
        objeto.replaceWith(objeto.val('').clone());
        jQuery('#vistaPrevia3').attr('src', window.imagenVacia3);
        jQuery('#infoNombre3').text('[Seleccione una imagen]');
        jQuery('#infoTamaño3').text('');
    };


};

//Lee el tipo MIME de la cabecera de la imagen
window.obtenerTipoMIME3 = function obtenerTipoMIME3(cabecera) {
    return cabecera.replace(/data:([^;]+).*/, '\$1');
}

//Obtiene las medidas de la imagen y las agrega a la 
//etiqueta infoTamaño
window.obtenerMedidas3 = function obtenerMedidas3() {
    jQuery('<img/>').bind('load', function(e) {

        var tamaño = jQuery('#infoTamaño3').text() + '; Medidas: ' + this.width + 'x' + this.height;

        jQuery('#infoTamaño3').text(tamaño);

    }).attr('src', jQuery('#vistaPrevia3').attr('src'));
}

jQuery(document).ready(function() {

    //Cargamos la imagen "vacía" que actuará como Placeholder
    //jQuery('#vistaPrevia').attr('src', window.imagenVacia3);

    //El input del archivo lo vigilamos con un "delegado"
    jQuery('#botonera3').on('change', '#imagen4', function(e) {
        window.mostrarVistaPrevia3();
    });

    //El botón Cancelar lo vigilamos normalmente
    jQuery('#cancelar3').on('click', function(e) {
        var objeto = jQuery('#imagen4');
        objeto.replaceWith(objeto.val('').clone());

        jQuery('#vistaPrevia3').attr('src', window.imagenVacia3);
        jQuery('#infoNombre3').text('');
        jQuery('#infoTamaño3').text('');
    });

});



























/*5TA IMAGEN*/






window.imagenVacia4 = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

window.mostrarVistaPrevia4 = function mostrarVistaPrevia4() {

    var Archivo5, Lector5;

    //Para navegadores antiguos
    if (typeof FileReader !== "function") {
        jQuery('#infoNombre4').text('[Vista previa no disponible]');
        jQuery('#infoTamaño4').text('(su navegador no soporta vista previa!)');
        return;
    }

    Archivo5 = jQuery('#imagen5')[0].files;
    if (Archivo5.length > 0) {

        Lector5 = new FileReader();
        Lector5.onloadend = function(e) {
            var origen4, tipo4;

            //Envia la imagen a la pantalla
            origen4 = e.target; //objeto FileReader
            //Prepara la información sobre la imagen
            tipo4 = window.obtenerTipoMIME4(origen4.result.substring(0, 30));

            jQuery('#infoNombre4').text(Archivo5[0].name + ' (Tipo: ' + tipo4 + ')');
            jQuery('#infoTamaño4').text('Tamaño: ' + e.total + ' bytes');
            //Si el tipo de archivo es válido lo muestra, 
            //sino muestra un mensaje 
            if (tipo4 !== 'image/jpeg' && tipo4 !== 'image/png' && tipo4 !== 'image/gif') {
                jQuery('#vistaPrevia4').attr('src', window.imagenVacia4);
                alert('El formato de imagen no es válido: debe seleccionar una imagen JPG, PNG o GIF.');
            } else {
                jQuery('#vistaPrevia4').attr('src', origen4.result);
                window.obtenerMedidas4();
            }

    if (e.total >= 2097152) {
        alert('DEBE CARGAR UNA IMAGEN MENOR O IGUAL A 2 MEGAS'); 
        $('#boton').attr("disabled", true);
        $("#alerta").show(); //mostrar div alerta
        //$("#vistaPrevia4").hide();
    }else{

        $('#boton').attr("disabled", false);
        $("#alerta").hide(); //mostrar div alerta

    }

        };
        Lector5.onerror = function(e) {
            console.log(e)
        }
        Lector5.readAsDataURL(Archivo5[0]);

    } else {
        var objeto = jQuery('#imagen5');
        objeto.replaceWith(objeto.val('').clone());
        jQuery('#vistaPrevia4').attr('src', window.imagenVacia4);
        jQuery('#infoNombre4').text('[Seleccione una imagen]');
        jQuery('#infoTamaño4').text('');
    };


};

//Lee el tipo MIME de la cabecera de la imagen
window.obtenerTipoMIME4 = function obtenerTipoMIME4(cabecera) {
    return cabecera.replace(/data:([^;]+).*/, '\$1');
}

//Obtiene las medidas de la imagen y las agrega a la 
//etiqueta infoTamaño
window.obtenerMedidas4 = function obtenerMedidas4() {
    jQuery('<img/>').bind('load', function(e) {

        var tamaño = jQuery('#infoTamaño4').text() + '; Medidas: ' + this.width + 'x' + this.height;

        jQuery('#infoTamaño4').text(tamaño);

    }).attr('src', jQuery('#vistaPrevia4').attr('src'));
}

jQuery(document).ready(function() {

    //Cargamos la imagen "vacía" que actuará como Placeholder
    //jQuery('#vistaPrevia').attr('src', window.imagenVacia4);

    //El input del archivo lo vigilamos con un "delegado"
    jQuery('#botonera4').on('change', '#imagen5', function(e) {
        window.mostrarVistaPrevia4();
    });

    //El botón Cancelar lo vigilamos normalmente
    jQuery('#cancelar4').on('click', function(e) {
        var objeto = jQuery('#imagen5');
        objeto.replaceWith(objeto.val('').clone());

        jQuery('#vistaPrevia4').attr('src', window.imagenVacia4);
        jQuery('#infoNombre4').text('');
        jQuery('#infoTamaño4').text('');
    });

});

















/*6TA IMAGEN*/






window.imagenVacia5 = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

window.mostrarVistaPrevia5 = function mostrarVistaPrevia5() {

    var Archivo6, Lector6;

    //Para navegadores antiguos
    if (typeof FileReader !== "function") {
        jQuery('#infoNombre5').text('[Vista previa no disponible]');
        jQuery('#infoTamaño5').text('(su navegador no soporta vista previa!)');
        return;
    }

    Archivo6 = jQuery('#imagen6')[0].files;
    if (Archivo6.length > 0) {

        Lector6 = new FileReader();
        Lector6.onloadend = function(e) {
            var origen5, tipo5;

            //Envia la imagen a la pantalla
            origen5 = e.target; //objeto FileReader
            //Prepara la información sobre la imagen
            tipo5 = window.obtenerTipoMIME5(origen5.result.substring(0, 30));

            jQuery('#infoNombre5').text(Archivo6[0].name + ' (Tipo: ' + tipo5 + ')');
            jQuery('#infoTamaño5').text('Tamaño: ' + e.total + ' bytes');
            //Si el tipo de archivo es válido lo muestra, 
            //sino muestra un mensaje 
            if (tipo5 !== 'image/jpeg' && tipo5 !== 'image/png' && tipo5 !== 'image/gif') {
                jQuery('#vistaPrevia5').attr('src', window.imagenVacia5);
                alert('El formato de imagen no es válido: debe seleccionar una imagen JPG, PNG o GIF.');
            } else {
                jQuery('#vistaPrevia5').attr('src', origen5.result);
                window.obtenerMedidas5();
            }

    if (e.total >= 2097152) {
        alert('DEBE CARGAR UNA IMAGEN MENOR O IGUAL A 2 MEGAS'); 
        $('#boton').attr("disabled", true);
        $("#alerta").show(); //mostrar div alerta
        //$("#vistaPrevia5").hide();
    }else{

        $('#boton').attr("disabled", false);
        $("#alerta").hide(); //mostrar div alerta

    }

        };
        Lector6.onerror = function(e) {
            console.log(e)
        }
        Lector6.readAsDataURL(Archivo6[0]);

    } else {
        var objeto = jQuery('#imagen6');
        objeto.replaceWith(objeto.val('').clone());
        jQuery('#vistaPrevia5').attr('src', window.imagenVacia5);
        jQuery('#infoNombre5').text('[Seleccione una imagen]');
        jQuery('#infoTamaño5').text('');
    };


};

//Lee el tipo MIME de la cabecera de la imagen
window.obtenerTipoMIME5 = function obtenerTipoMIME5(cabecera) {
    return cabecera.replace(/data:([^;]+).*/, '\$1');
}

//Obtiene las medidas de la imagen y las agrega a la 
//etiqueta infoTamaño
window.obtenerMedidas5 = function obtenerMedidas5() {
    jQuery('<img/>').bind('load', function(e) {

        var tamaño = jQuery('#infoTamaño5').text() + '; Medidas: ' + this.width + 'x' + this.height;

        jQuery('#infoTamaño5').text(tamaño);

    }).attr('src', jQuery('#vistaPrevia5').attr('src'));
}

jQuery(document).ready(function() {

    //Cargamos la imagen "vacía" que actuará como Placeholder
    //jQuery('#vistaPrevia').attr('src', window.imagenVacia5);

    //El input del archivo lo vigilamos con un "delegado"
    jQuery('#botonera5').on('change', '#imagen6', function(e) {
        window.mostrarVistaPrevia5();
    });

    //El botón Cancelar lo vigilamos normalmente
    jQuery('#cancelar5').on('click', function(e) {
        var objeto = jQuery('#imagen6');
        objeto.replaceWith(objeto.val('').clone());

        jQuery('#vistaPrevia5').attr('src', window.imagenVacia5);
        jQuery('#infoNombre5').text('');
        jQuery('#infoTamaño5').text('');
    });

});




