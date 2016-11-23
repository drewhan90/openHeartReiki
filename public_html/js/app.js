function initMap() {
	// Home Coordinates
	var home = {lat: 49.282824, lng: -123.115143}; 
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 15,
		center: home
	});
	// Map Marker
	var marker = new google.maps.Marker({
		position: home,
		map: map
	});
};

$(document).ready(()=>{
	// Foundation JS
	$(function () {
        $(document).foundation();
    });
	// JQUERY UI tabs
    $(function() {
    	$( "#tabs" ).tabs();
  	});
	// Scroll Top animate speed
	$('.btn-top').click(()=>{
		$('html, body').animate({
			scrollTop: $('header').offset().top
		}, 1000);
	});
	// FadeIn/Out on scroll bottom
	$(this).scroll(()=>{
		if($(this).scrollTop() > 800) {
			$('.btn-top').fadeIn();
		}
		else {
			$('.btn-top').fadeOut();
		}
	});
	// Display Curved Overlay only on Index Page
	if($('#index').length != 0){
		$('.curve-overlay').removeClass('hidden');
	};
	if($('#blog').length != 0){
		$('#menu .blog').addClass('active');
	};
	// Hide Footer Map on Contact Page
	if($('#contact').length != 0){
		console.log('works');
		$('footer #map').addClass('hidden');
	}
	// Smooth Scrolling
	$(function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
});

