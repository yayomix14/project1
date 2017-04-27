var filtroBusqueda = {
	'91': 'Cedula', '98': 'Usuario', '99': 'Fecha', 
	'81': 'Fecha y Usuario'
}
var fstElement = $(".mb:first");
var filtroID = fstElement.prop('id');
$('#texto').prop('value', '');
$('#boton2').hide();
$('#filtro').hide();


$('#showFiltro').on('click', function() {
	if($('#filtro').is(':hidden'))
    {
    	$('#filtro').prop('innerHTML',  fstElement.prop('innerHTML')+' <span class="caret"></span>');
    	$('#'+fstElement.prop('id')).hide();
        $('#filtro').show();
        $('.form-group').removeClass('col-md-4');
    	$('.form-group').addClass('col-md-6');
    	$('#texto').attr('placeholder', 'Búsqueda por '+fstElement.prop('innerHTML'));
    	
    	if($('#texto').data('daterangepicker'))
    	{
    		$('#texto').data('daterangepicker').remove();
    	}
    	else if($('#texto').data('autocomplete'))
    	{
    		$('#texto').autocomplete().disable();
    	}

		$('#texto').prop('value', '');
    }
    else
    {
    	$('#filtro').hide();
    	$('#filtro').prop('innerHTML', '-- <span class="caret"></span>');
    	$('a:hidden').show();
    	$('#texto').attr('placeholder', 'Búsqueda por '+fstElement.prop('innerHTML'));

    	if($('.form-group').hasClass('col-md-6'))
    	{
    		$('.form-group').removeClass('col-md-6');
    		$('.form-group').addClass('col-md-4');
    	}
    	else
    	{
    		if($('.form-group').hasClass('col-md-5'))
    		{
    			$('.form-group').removeClass('col-md-5');
    			$('.form-group').addClass('col-md-4');
    		}
    	}

    	if($('#texto').data('daterangepicker'))
    	{
    		$('#texto').data('daterangepicker').remove();
    	}
    	else if($('#texto').data('autocomplete'))
    	{
    		$('#texto').autocomplete().disable();
    	}

		$('#texto').prop('value', '');	
    }
});

$('.mb').on('click', function(e) {
	e.preventDefault();
	filtroID = $(this).prop('id');
	filtroBuscar = filtroBusqueda[filtroID];
	$('#filtro').prop('innerHTML', filtroBuscar +' <span class="caret"></span>');
	$('#texto').attr('placeholder', 'Búsqueda por '+ filtroBuscar);
	$('a:hidden').show();
	$(this).hide();
	var mdl = $('#boton').attr('onclick').substring(26, 27);
	$('#boton').attr('onclick', 'buscar("1", "'+filtroID+'", event, "'+mdl+'")');
	if(filtroID == '99')
	{
		if($('#texto').data('autocomplete'))
    	{
    		$('#texto').autocomplete().disable();
    	}

		var tudey = new Date();
		$('#texto').daterangepicker({
			locale: {
		      format: 'YYYY-MM-DD'
		    },
		    "startDate": tudey.getFullYear() + "-" + (tudey.getMonth() + 1) + "-" +tudey.getDate() ,
		    "endDate": tudey.getFullYear() + "-" + (tudey.getMonth() + 1) + "-" +tudey.getDate(),
		    "autoApply": true,
		    "linkedCalendars": false
		});
	}
	else if(filtroID == '81')
	{
		if($('#texto').data('autocomplete'))
    	{
    		$('#texto').autocomplete().disable();
    	}

		var tudey = new Date();
		$('#texto').daterangepicker({
			locale: {
		      format: 'YYYY-MM-DD'
		    },
		    "startDate": '2013-02-18', //tudey.getFullYear() + "-" + (tudey.getMonth() + 1) + "-" +tudey.getDate() ,
		    "endDate": '2013-02-19',//tudey.getFullYear() + "-" + (tudey.getMonth() + 1) + "-" +tudey.getDate(),
		    "autoApply": false,
		    "linkedCalendars": false
		});
	}
	else
	{
		if($('#texto').data('daterangepicker'))
    	{
    		$('#texto').data('daterangepicker').remove();
    	}
    	else if($('#texto').data('autocomplete'))
    	{
    		$('#texto').autocomplete().disable();
    	}

		$('#texto').prop('value', '');
	}
});







