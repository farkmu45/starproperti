$(document).ready(function () {
    "use strict";


    // Property Map
    function initialize() {
      $(".property-map").each(function (index) {

          //Taking data attribute from map wrapper
          var mapLat = parseFloat($(this).data('lat'));
          var mapLng = parseFloat($(this).data('lng'));
          var mapZoom = parseInt($(this).data('zoom'));
          var mapType = $(this).data('maptype');

          //Processing wrapper data attribute to coordinate
          var mapOptions = {
              center: {
                  lat: mapLat,
                  lng: mapLng
              },
              zoom: mapZoom,
              mapTypeId: mapType,
              scrollwheel: false,
              styles: [
                  {
                      "featureType": "administrative",
                      "elementType": "all",
                      "stylers": [
                          {
                              "saturation": "-100"
                          }
                      ]
                  },
                  {
                      "featureType": "administrative.province",
                      "elementType": "all",
                      "stylers": [
                          {
                              "visibility": "off"
                          }
                      ]
                  },
                  {
                      "featureType": "landscape",
                      "elementType": "all",
                      "stylers": [
                          {
                              "saturation": -100
                          },
                          {
                              "lightness": 65
                          },
                          {
                              "visibility": "on"
                          }
                      ]
                  },
                  {
                      "featureType": "poi",
                      "elementType": "all",
                      "stylers": [
                          {
                              "saturation": -100
                          },
                          {
                              "lightness": "50"
                          },
                          {
                              "visibility": "simplified"
                          }
                      ]
                  },
                  {
                      "featureType": "road",
                      "elementType": "all",
                      "stylers": [
                          {
                              "saturation": "-100"
                          }
                      ]
                  },
                  {
                      "featureType": "road.highway",
                      "elementType": "all",
                      "stylers": [
                          {
                              "visibility": "simplified"
                          }
                      ]
                  },
                  {
                      "featureType": "road.arterial",
                      "elementType": "all",
                      "stylers": [
                          {
                              "lightness": "30"
                          }
                      ]
                  },
                  {
                      "featureType": "road.local",
                      "elementType": "all",
                      "stylers": [
                          {
                              "lightness": "40"
                          }
                      ]
                  },
                  {
                      "featureType": "transit",
                      "elementType": "all",
                      "stylers": [
                          {
                              "saturation": -100
                          },
                          {
                              "visibility": "simplified"
                          }
                      ]
                  },
                  {
                      "featureType": "water",
                      "elementType": "geometry",
                      "stylers": [
                          {
                              "hue": "#ffff00"
                          },
                          {
                              "lightness": -25
                          },
                          {
                              "saturation": -97
                          }
                      ]
                  },
                  {
                      "featureType": "water",
                      "elementType": "labels",
                      "stylers": [
                          {
                              "lightness": -25
                          },
                          {
                              "saturation": -100
                          }
                      ]
                  }
              ]
          };

          //Initiating map
          var map = new google.maps.Map(this, mapOptions);

          //Map Marker
          var marker = new google.maps.Marker({
              position: {
                  lat: 40.713355,
                  lng: -74.005535
              },
              map: map,
              icon: 'images/map-marker.png'
          });
      });

      $(".office-map").each(function (index) {
          //Taking data attribute from map wrapper
          var mapLat = parseFloat($(this).data('lat'));
          var mapLng = parseFloat($(this).data('lng'));
          var mapZoom = parseInt($(this).data('zoom'));
          var mapType = $(this).data('maptype');

          //Processing wrapper data attribute to coordinate
          var mapOptions = {
              center: {
                lat: mapLat,
                lng: mapLng
              },
              zoom: mapZoom,
              mapTypeId: mapType,
              scrollwheel: false,
              styles: [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#444444"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#08a191"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ]
          };

          //Initiating map
          var map = new google.maps.Map(this, mapOptions);

          //Map Marker
          var marker = new google.maps.Marker({
              position: {
                  lat: 40.713355,
                  lng: -74.005535
              },
              map: map,
              icon: 'images/map-marker.png'
          });

          //Map Marker
          var marker2 = new google.maps.Marker({
              position: {
                  lat: 40.804305, 
                  lng: -73.499145
              },
              map: map,
              icon: 'images/map-marker.png'
          });

          //Map Marker
          var marker3 = new google.maps.Marker({
              position: {
                  lat: 40.675545, 
                  lng: -74.532908
              },
              map: map,
              icon: 'images/map-marker.png'
          });
      });
      $(".listing-search-map").each(function (index) {
          //Taking data attribute from map wrapper
          var mapLat = parseFloat($(this).data('lat'));
          var mapLng = parseFloat($(this).data('lng'));
          var mapZoom = parseInt($(this).data('zoom'));
          var mapType = $(this).data('maptype');

          //Processing wrapper data attribute to coordinate
          var mapOptions = {
              center: {
                lat: mapLat,
                lng: mapLng
              },
              zoom: mapZoom,
              mapTypeId: mapType,
              scrollwheel: false,
              styles: [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#444444"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#08a191"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ]
          };

          //Initiating map
          var map = new google.maps.Map(this, mapOptions);

          //Map Marker
          var marker = new google.maps.Marker({
              position: {
                  lat: 40.713355,
                  lng: -74.005535
              },
              map: map,
              icon: 'images/map-marker.png'
          });

          //Map Marker
          var marker2 = new google.maps.Marker({
              position: {
                  lat: 40.804305, 
                  lng: -73.499145
              },
              map: map,
              icon: 'images/map-marker.png'
          });

          //Map Marker
          var marker3 = new google.maps.Marker({
              position: {
                  lat: 40.675545, 
                  lng: -74.532908
              },
              map: map,
              icon: 'images/map-marker.png'
          });
      });

      $(".add-listing-map").each(function (index) {
          //Taking data attribute from map wrapper
          var mapLat = parseFloat($(this).data('lat'));
          var mapLng = parseFloat($(this).data('lng'));
          var mapZoom = parseInt($(this).data('zoom'));
          var mapType = $(this).data('maptype');

          //Processing wrapper data attribute to coordinate
          var mapOptions = {
              center: {
                lat: mapLat,
                lng: mapLng
              },
              zoom: mapZoom,
              mapTypeId: mapType,
              scrollwheel: false,
              styles: [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#444444"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#08a191"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ]
          };

          //Initiating map
          var map = new google.maps.Map(this, mapOptions);

          //Map Marker
          var marker = new google.maps.Marker({
              position: {
                  lat: 40.713355,
                  lng: -74.005535
              },
              map: map,
              icon: 'images/map-marker.png'
          });

          //Map Marker
          var marker2 = new google.maps.Marker({
              position: {
                  lat: 40.804305, 
                  lng: -73.499145
              },
              map: map,
              icon: 'images/map-marker.png'
          });

          //Map Marker
          var marker3 = new google.maps.Marker({
              position: {
                  lat: 40.675545, 
                  lng: -74.532908
              },
              map: map,
              icon: 'images/map-marker.png'
          });
      });
    }

    initialize();

});
