
var x = document.getElementById("des");
if (navigator.geolocation && x!=undefined) {
    var defaultLatLng = [11.3929277, -69.6657661];
    var map = L.map('map', { //Id de nuestro div
		center: defaultLatLng,
		zoom: 15,
		maxZoom: 18
	});
	var layer = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: 'CCS Innovaciòn y Desarrollo',
		maxZoom: 18
	});
	layer.addTo(map);
	map.locate({
		enableHighAccuracy: true
	});
	sessionStorage.removeItem("lat");
	sessionStorage.removeItem("lon");
	sendPosition();
}

var popup = L.popup();


function onMapClick2(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("¡DENUNCIAR AQUÍ!")
        .openOn(map);
        console.log(e.latlng.lat);
        console.log(e.latlng.lng);

    document.getElementById("ubicacion_movi_lat").value = e.latlng.lat;
	document.getElementById("ubicacion_movi_lon").value = e.latlng.lng;

}



function habilitar(value)
		{
			
			var ee=  document.getElementById("captura").value;
			//var e1=  document.getElementById("captura1").value;
			console.log(value);
			//console.log(e1);
			if(value==1) {
			// 	// quitamos
			 document.getElementById("map1").style.display="none";
			 }

			 else if(value==2) {
			// 	// ponemos
			 document.getElementById("map1").style.display="block";
			 }

		}