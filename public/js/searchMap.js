"use strict";

if(document.getElementById('searchMap') != null){
    L.HtmlIcon = L.Icon.extend({
      options: {
        /*
        html: (String) (required)
        iconAnchor: (Point)
        popupAnchor: (Point)
        */
      },

      initialize: function (options) {
        L.Util.setOptions(this, options);
      },

      createIcon: function () {
        var div = document.createElement('div');
         div.innerHTML = this.options.html;
        if (div.classList)
          div.classList.add('leaflet-marker-icon');
        else
          div.className += ' ' + 'leaflet-marker-icon';
        return div;
      },

      createShadow: function () {
        return null;
      }
    });

    var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Points &copy 2012 LINZ'
      }),
      latlng = L.latLng(-37.82, 175.24);

    var map = L.map('searchMap', {center: latlng, zoom: 13, layers: [tiles]});

    var markers = L.markerClusterGroup();
    var k = 1;
    for (var i = 0; i < addressPoints.length; i++) {
      var a = addressPoints[i];
        
      if(k == 30){
        k = 1;
      }

       var markerHTML = new L.HtmlIcon({
          html : "<img class='leaflet-marker-icon leaflet-zoom-animated leaflet-interactive' src='images/marker/"+k+".png' alt='markericon' />", 
      });

      markers.on('clusterclick', function() {
        k = 1;
        var markerHTML = new L.HtmlIcon({
            html : "<img class='leaflet-marker-icon leaflet-zoom-animated leaflet-interactive' src='images/marker/"+k+".png' alt='markericon' />", 
        });
      });


      var title = a[2];
      var marker = L.marker(new L.LatLng(a[0], a[1]), {icon: markerHTML});
      marker.bindPopup(title, {offset: new L.Point(0, -170)});
      markers.addLayer(marker);
      k++;
    }

    map.addLayer(markers);
}