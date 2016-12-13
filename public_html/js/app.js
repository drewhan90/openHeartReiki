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
	$(document).foundation();
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
	// Slide in when scroll
	// Visible Plugin
	(function($) {
		$.fn.visible = function(partial) {
			var $t            = $(this),
			$w            = $(window),
			viewTop       = $w.scrollTop(),
			viewBottom    = viewTop + $w.height(),
			_top          = $t.offset().top,
			_bottom       = _top + $t.height(),
			compareTop    = partial === true ? _bottom : _top,
			compareBottom = partial === true ? _top : _bottom;

			return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
		};
	})(jQuery);
	// On scroll visible check
	$(window).scroll(function(event) {

		$(".module").each(function(i, el) {
			var el = $(el);
			if (el.visible(true)) {
	    // add css class for animation
	    el.addClass("come-in"); 
		} 
	});

	});

	var win = $(window);
	var allMods = $(".module");
	// Already visible modules
	allMods.each(function(i, el) {
		var el = $(el);
		if (el.visible(true)) {
			el.addClass("already-visible"); 
		} 
	});
	win.scroll(function(event) {	  
		allMods.each(function(i, el) {
			var el = $(el);
			if (el.visible(true)) {
				el.addClass("come-in"); 
			} 
		});

	});

	
});