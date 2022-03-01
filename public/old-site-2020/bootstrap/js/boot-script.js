// JavaScript Document

<!-- Fullscreen Carousel -->
jQuery(document).ready(function() {
    $('.carousel').carousel({
        pause: "false",
        interval: 5000
    });
    var height;
    if($('body').hasClass('home')){
        height = '600px';
    }else{
        height = '400px';
    }
    

    $('.carousel').css({'margin': 0, 'width': $(window).outerWidth(), 'height':height });
    $('.carousel .item').css({'width': '100%', 'height': height});
    $('.carousel-inner div.item img').each(function() {
        var imgSrc = $(this).attr('src');
        $(this).parent().css({'background': 'url('+imgSrc+') center center no-repeat', '-webkit-background-size': '100% ', '-moz-background-size': '100%', '-o-background-size': '100%', 'background-size': '100%', '-webkit-background-size': 'cover', '-moz-background-size': 'cover', '-o-background-size': 'cover', 'background-size': 'cover'});
        $(this).remove();
    });

    $(window).on('resize', function() {
        $('.carousel').css({'width': $(window).outerWidth(), 'height': height});
    });
}); 
<!-- End Fullscreen Carousel -->

<!-- Menu Hover -->
$("document").ready(function() {
	$('.js-activated').dropdownHover().dropdown();
});
<!-- End Menu Hover -->

<!-- Google Map -->
    var mapCanvas;
    var LatLng=new google.maps.LatLng(34.000332, -6.847874);
	function initialize() { 
		var myOptions = { 
			center:LatLng, 
			zoom:17,
            zoomControl: false,
			mapTypeId:google.maps.MapTypeId.ROADMAP 
		}; 
				
        var mapCanvas = new google.maps.Map(document.getElementById("googleMap"),myOptions); 

        
        //Changes zoom levels when the projection is available.
        google.maps.event.addListenerOnce(mapCanvas, "projection_changed", function(){
            mapCanvas.setMapTypeId(google.maps.MapTypeId.HYBRID);  //Changes the MapTypeId in short time.
            setZoomLimit(mapCanvas, google.maps.MapTypeId.ROADMAP);
            setZoomLimit(mapCanvas, google.maps.MapTypeId.HYBRID);
            setZoomLimit(mapCanvas, google.maps.MapTypeId.SATELLITE);
            setZoomLimit(mapCanvas, google.maps.MapTypeId.TERRAIN);
            mapCanvas.setMapTypeId(google.maps.MapTypeId.ROADMAP);  //Sets the MapTypeId to original.
        });
        var marker = new google.maps.Marker({
            position:LatLng, 
            map: mapCanvas
        });
    }

function setZoomLimit(map, mapTypeId){
    //Gets MapTypeRegistry
    var mapTypeRegistry = map.mapTypes;

    //Gets the specified MapType
    var mapType = mapTypeRegistry.get(mapTypeId);
    //Sets limits to MapType
    mapType.maxZoom = 17;  //It doesn't work with SATELLITE and HYBRID maptypes.
    mapType.minZoom = 16;

 
	} 
google.maps.event.addDomListener(window, 'load', initialize); 
<!-- End Google Map -->

