
$(function () {
	$('input[name="d_concesion"]').daterangepicker({
		//"minDate": moment('<?php echo date('Y-m-d')?>'),
		//"timePicker": true,
		//"timePicker24Hour": false,
		//"timePickerIncrement": 15,
		"autoApply": true,
		"locale": {
			"format": "DD/MM/YYYY",
			"separator": " - ",
		}
	});
});



$(window).load(function(){

 $(function() {
  $('#imagen').change(function(e) {
      addImage(e); 
     });

     function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;
    
      if (!file.type.match(imageType))
       return;
  
      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }
  
     function fileOnload(e) {
      var result=e.target.result;
      $('#imgSalida').attr("src",result);
     }
    });
  });


$( document ).ready(function() {
    				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
});
					
function select_mapa(vv) {
					
	      if (vv.value=="Acosta"){
	      		$("#div_hidden").hide(700);
	      		$("#acosta").show(700);

					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		  
	      }else if(vv.value=="Bolivar"){
				$("#div_hidden").hide(700);
				$("#bolivar").show(700);
				$("#acosta").hide(700);  
					
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Buchivacoa"){
				$("#div_hidden").hide(700);
				$("#buchivacoa").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Cacique Manaure"){
				$("#div_hidden").hide(700);
				$("#cacique_manaure").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Carirubana"){
				$("#div_hidden").hide(700);
				$("#carirubana").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Colina"){
				$("#div_hidden").hide(700);
				$("#colina").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Dabajuro"){
				$("#div_hidden").hide(700);
				$("#dabajuro").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Democracia"){
				$("#div_hidden").hide(700);
				$("#democracia").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
				
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Falcon"){
				$("#div_hidden").hide(700);
				$("#falcon").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Federacion"){
				$("#div_hidden").hide(700);
				$("#federacion").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Jacura"){
				$("#div_hidden").hide(700);
				$("#jacura").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Los Taques"){
				$("#div_hidden").hide(700);
				$("#los_taques").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Mauroa"){
				$("#div_hidden").hide(700);
				$("#mauroa").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Miranda"){
				$("#div_hidden").hide(700);
				$("#miranda").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Monsenor Iturriza"){
				$("#div_hidden").hide(700);
				$("#monsenor_iturriza").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Palmasola"){
				$("#div_hidden").hide(700);
				$("#palmasola").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Petit"){
				$("#div_hidden").hide(700);
				$("#petit").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Piritu"){
				$("#div_hidden").hide(700);
				$("#piritu").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="San Francisco"){
				$("#div_hidden").hide(700);
				$("#san_francisco").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Silva"){
				$("#div_hidden").hide(700);
				$("#silva").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Sucre"){
				$("#div_hidden").hide(700);
				$("#sucre").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Tocopero"){
				$("#div_hidden").hide(700);
				$("#tocopero").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					
					$("#union").hide(700);
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Union"){
				$("#div_hidden").hide(700);
				$("#union").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					
					$("#urumaco").hide(700);
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Urumaco"){
				$("#div_hidden").hide(700);
				$("#urumaco").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					
					$("#zamora").hide(700);
	      		 
	      }else if(vv.value=="Zamora"){
				$("#div_hidden").hide(700);
				$("#zamora").show(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
					
	      		 
	      }else if(vv.value==""){
	      		$("#div_hidden").hide(700);
				$("#zamora").hide(700);
				$("#acosta").hide(700);  
					$("#bolivar").hide(700);
					$("#buchivacoa").hide(700);
					$("#cacique_manaure").hide(700); 
					$("#carirubana").hide(700);
					$("#colina").hide(700);
					$("#dabajuro").hide(700);
					$("#democracia").hide(700);
					$("#falcon").hide(700);
					$("#federacion").hide(700);
					$("#jacura").hide(700);
					$("#los_taques").hide(700);
					$("#mauroa").hide(700);
					$("#miranda").hide(700);
					$("#monsenor_iturriza").hide(700);
					$("#palmasola").hide(700);
					$("#petit").hide(700);
					$("#piritu").hide(700);
					$("#san_francisco").hide(700);
					$("#silva").hide(700);
					$("#sucre").hide(700);
					$("#tocopero").hide(700);
					$("#union").hide(700);
					$("#urumaco").hide(700);
	      }
      }


