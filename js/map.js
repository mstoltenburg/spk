
function initialize() {
	var office = new google.maps.LatLng(52.5057,13.3270);

	var mapOptions = {
		mapTypeControl: false,
		center: office,
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(document.getElementById("map"), mapOptions);

	var infowindow = new google.maps.InfoWindow({
		content: document.getElementById('info').innerHTML
	});

	var marker = new google.maps.Marker({
		// title: 'Click to zoom',
		// draggable: true,
		position: office,
		map: map
	});

	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map, marker);
	});

	google.maps.event.addListener(infowindow, 'closeclick', function() {
		map.panTo(office);
	});

	// google.maps.event.trigger(marker, 'click');

	google.maps.event.addListener(marker, 'dragstart', function() {
		infowindow.close();
	});

	google.maps.event.addListener(marker, 'dragend', function() {
		infowindow.setContent(marker.getPosition().toString());
		infowindow.open(map, marker);
	});
}

google.maps.event.addDomListener(window, 'load', initialize);
