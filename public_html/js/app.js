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

$(document).ready(()=>{
	/// Scroll Top animate speed
	$('.btn-top').click(()=>{
		$('html, body').animate({
			scrollTop: $('header').offset().top
		}, 1000);
	});
	/// FadeIn/Out on scroll bottom
	$(this).scroll(()=>{
		if($(this).scrollTop() > 800) {
			$('.btn-top').fadeIn();
		}
		else {
			$('.btn-top').fadeOut();
		}
	});
});

