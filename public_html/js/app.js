$(document).foundation();

function initMap() {
	/// Home Coordinates
	var home = {lat: 49.282824, lng: -123.115143}; 
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 15,
		center: home
	});
	/// Map Marker
	var marker = new google.maps.Marker({
		position: home,
		map: map
	});
};

