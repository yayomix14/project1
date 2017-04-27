function ajax_registros(boton, evt ,pagina, mdl) {
    evt.preventDefault();
    if(/[a-zA-Z]/.test(pagina))
    {
        if(/page/.test(pagina))
        {
            pagina = pagina.match(/\d{1,}/);
            pagina = pagina[0];
        }
        else
        {
            pagina = '1';
        }
        
    }
    var mdlLista = {
        '5': '/decretos/auditoria'
    }
    
    $.ajax({
        url: mdlLista[mdl], 
        type: 'GET',
        beforeSend: function() {
            $('#tablaRegistros').html('<h3 id="pleaseWait" class="text-info col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-3">Procesando su búsqueda. Por favor espere...</h3><br/><p class="col-xs-12">&nbsp;</p>');
        },
        success: function(response){
           $('#tablaRegistros').html(response);
        },
        error: function(){
           $('#tablaRegistros').html('<h3 id="errorOccur" class="text-danger col-xs-7 col-xs-offset-3 col-sm-5 col-sm-offset-4 col-md-4 col-md-offset-5">Ha ocurrido un error. Por favor actualice la pagina</h3><br/><p class="col-xs-12">&nbsp;</p>');
        },
        data: "page="+pagina,
        
        cache: false,
        contentType: false,
        processData: false
    });
}

function buscar(pagina, identificador, evt, mdl)
{
    evt.preventDefault();
    if(/[a-zA-Z]/.test(pagina))
    {
        if(/page/.test(pagina))
        {
            pagina = pagina.match(/\d{1,}/);
            pagina = pagina[0];
        }
        else
        {
            pagina = '1';
        }
    }

    var mdlLista = {
        '5': '/ProyectoPortalGob/auditoria/buscarRegistro?page='+pagina
    }

    var parametros = {
        'ident': identificador,
        'contt': $('#texto').val()
    }

    $.ajax({
        type:'POST',
        cache: false,
        data: parametros,
        url: mdlLista[mdl],
        beforeSend: function() {
            $('#tablaRegistros').html('<div class="row"><h3 id="pleaseWait" class="text-info col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-3">Procesando su búsqueda. Por favor espere...</h3><br/><p class="col-xs-12">&nbsp;</p></div>');
        },
        success: function(response) {
            $('#tablaRegistros').html(response);
            $('#boton2').show();
        },
        error: function () {
            $('#tablaRegistros').html('<div class="row"><h3 id="errorOccur" class="text-danger col-xs-7 col-xs-offset-3 col-sm-5 col-sm-offset-4 col-md-4 col-md-offset-5">Ha ocurrido un error. Por favor actualice la pagina</h3><br/><p class="col-xs-12">&nbsp;</p></div>');
        }
    });
    return false; 
}
