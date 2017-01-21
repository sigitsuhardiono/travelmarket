(function($){
	$(document).ready(function(){
		var geocoder = new google.maps.Geocoder();
		function initialize_from() {
			// penjemputan
			var origin_input = document.getElementById('automap');
			var origin_autocomplete = new google.maps.places.Autocomplete((origin_input),{/*types:['geocode']*/});
			origin_autocomplete.addListener('place_changed', function() {
				var place = origin_autocomplete.getPlace();
				var id = 'origin';
				set_address(place, id);
				if (!place.geometry) {
				  window.alert("Autocomplete's returned place contains no geometry");
				  return;
				}
			});
		}
		function set_address(results, id){
			var kode_pos 	= "";
			var kelurahan 	= "";
			var kecamatan 	= "";
			if (id == "origin"){
				var components = results.address_components;
				for (var i = 0; i < components.length; i++) {
					//kode_pos
					if (components[i].types[0] == "postal_code"){
						kode_pos = components[i].long_name;
					}
					//kelurahan
					if (components[i].types[0] == "administrative_area_level_4"){
						kelurahan = components[i].long_name;
					}
					//kecamatan
					if (components[i].types[0] == "administrative_area_level_3"){
						kecamatan = components[i].long_name;
					}
				}
			}
			else if (id == "destination") {
				var components = results.address_components;
				for (var i = 0; i < components.length; i++) {
					//kode_pos
					if (components[i].types[0] == "postal_code"){
						kode_pos = components[i].long_name;
					}
					//kelurahan
					if (components[i].types[0] == "administrative_area_level_4"){
						kelurahan = components[i].long_name;
					}
					//kecamatan
					if (components[i].types[0] == "administrative_area_level_3"){
						kecamatan = components[i].long_name;
					}
				}
			}
			cek_overarea(id,kode_pos,kelurahan,kecamatan);
		}
		function cek_overarea(id,kode_pos,kelurahan,kecamatan){
			console.log(id+"-"+kode_pos+"-"+kelurahan+"-"+kecamatan);
		}
		google.maps.event.addDomListener(window, 'load', initialize_from);

	}); 

})(this.jQuery);