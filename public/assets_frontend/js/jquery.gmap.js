var styleArray = [
            {
                "stylers": [
                    {
                        "hue": "#ff0000"
                    },
                    {
                        "invert_lightness": true
                    },
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 33
                    },
                    {
                        "gamma": 0.5
                    }
                ]
            },
            {
              "featureType": "road.local",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#3c3c3c"
                }
              ]
            },
            {
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#0b0b0b"
                }
              ]
            },
            {
              "featureType": "administrative.land_parcel",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#272727"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "geometry.stroke",
              "stylers": [
                {
                  "color": "#282828"
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#000000"
                }
              ]
            },
            {
              "elementType": "geometry.stroke",
              "stylers": [
                {
                  "color": "#1c1c1c"
                },
                {
                  "weight": 2
                }
              ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    }
                ]
            }
        ];

// Google Map --- https://developers.google.com/maps/documentation/javascript/
var GoogleMap = function() {
    "use strict";

    var handleGoogleMaps = function() {
        function initialize() {

            // Create a map object and specify the DOM element for display.
            var PosCity = new google.maps.LatLng(34.0003985,-6.8480294);
            var map = new google.maps.Map(document.getElementById('map'), {
                center: PosCity,
                styles: styleArray,
                scrollwheel: false,
                zoom: 17,
                streetViewControl: false,
                mapTypeControl: false,
                zoomControl: false,
                scaleControl: false
            });

            var coordInfoWindow = new google.maps.InfoWindow();
            coordInfoWindow.setContent(createInfoWindowContent(PosCity, map.getZoom()));
            coordInfoWindow.setPosition(PosCity);
            coordInfoWindow.open(map);

            map.addListener('zoom_changed', function() {
                coordInfoWindow.setContent(createInfoWindowContent(PosCity, map.getZoom()));
                coordInfoWindow.open(map);
            });

            var TILE_SIZE = 256;

            function createInfoWindowContent(latLng, zoom) {
                var scale = 1 << zoom;

                var worldCoordinate = project(latLng);

                var pixelCoordinate = new google.maps.Point(
                    Math.floor(worldCoordinate.x * scale),
                    Math.floor(worldCoordinate.y * scale));

                var tileCoordinate = new google.maps.Point(
                    Math.floor(worldCoordinate.x * scale / TILE_SIZE),
                    Math.floor(worldCoordinate.y * scale / TILE_SIZE));

                return [
                    '40, rue Oued Fès – Agdal – 10 000 <br> RABAT - Maroc'
                ].join('<br>');
            }

            // The mapping between latitude, longitude and pixels is defined by the web
            // mercator projection.
            function project(latLng) {
                var siny = Math.sin(latLng.lat() * Math.PI / 180);

                // Truncating to 0.9999 effectively limits latitude to 89.189. This is
                // about a third of a tile past the edge of the world tile.
                siny = Math.min(Math.max(siny, -0.9999), 0.9999);

                return new google.maps.Point(
                    TILE_SIZE * (0.5 + latLng.lng() / 360),
                    TILE_SIZE * (0.5 - Math.log((1 + siny) / (1 - siny)) / (4 * Math.PI)));
            }
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    }

    return {
        init: function() {
            handleGoogleMaps(); // initial setup for google map
        }
    }
}();

$(document).ready(function() {
    GoogleMap.init();
});