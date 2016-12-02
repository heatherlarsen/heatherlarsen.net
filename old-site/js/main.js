$(document).ready( function() {
    $('.subMenu').smint({
    	'scrollSpeed' : 1000
    });

    $('.carousel').slick({
        dots: false,
        infinite: true,
        autoplay: false,
        responsive : [ 
            {
                breakpoint: 480,
                settings: "unslick"
            }
        ]
    });

    // change aboutImg to square for safari until better solution is found
    var isSafari = /constructor/i.test(window.HTMLElement);
    if (isSafari) {
        $('#aboutImg').css(
            {
                'border-radius':'0px', 
                '-webkit-border-radius':'0px'
            }
        );
    }

    if ($('#ieClose').length) {
        $('#ieClose').click(function() {
            $('#ieWarning').slideUp();
        });
    }

    runCharts();
});

$(window).scroll(function() {
	runCharts();

});

function runCharts() {
	if (isElementInViewport('.progress-bar:first-child')) {
		$('.progress-bar').each(function() {
			var value = $(this).attr('data-skill-level');
			$(this).width(value+'%');
		});
	} else {
		$('.progress-bar').each(function() {
			var value = $(this).attr('data-skill-level');
			$(this).width('0px');
		});
	}
}

function isElementInViewport(elem) {
	var elem = $(elem);

	// Get the scroll position of the page.
    var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
    var viewportTop = $(scrollElem).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    // Get the position of the element on the page.
    var elemTop = Math.round( elem.offset().top );
    var elemBottom = elemTop + elem.height();

    return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
}

// Google Maps Scripts
// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 10,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(47.695711, -122.317502), // Maple Leaf, Seattle, WA

        // Disables the default Google Maps UI components
        /*disableDefaultUI: true,*/
        scrollwheel: false,
        draggable: false,

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using out element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Custom Map Marker Icon - Customize the map-marker.png file to customize your icon
    //var image = 'img/map-marker.png';
    var myLatLng = new google.maps.LatLng(47.695711, -122.317502);
    var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map
    });
}