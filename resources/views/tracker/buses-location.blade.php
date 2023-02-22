<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Demo: Add custom markers in Mapbox GL JS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js"></script>
    <link
      href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css"
      rel="stylesheet"
    />
    <style>
      body {
        margin: 0;
        padding: 0;
      }
      #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 50%;
      }
      .marker {
        background-image: url("{{asset('images/icon/bus/bus.svg')}}");
        background-size: cover;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
      }
      .mapboxgl-popup {
        max-width: 200px;
      }
      .mapboxgl-popup-content {
        text-align: center;
        font-family: 'Open Sans', sans-serif;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
      
      mapboxgl.accessToken = 'pk.eyJ1IjoibWRoYWZpenVycmFobWFuIiwiYSI6ImNsN3hrNGZmbjA5cjgzcHA1bGI3MXdjdnoifQ.KhHG3AwXtjjg0jNYM5Z29w';

      const geojson = {
        'type': 'FeatureCollection',
        'features': [
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [-77.032, 38.913]
            },
            'properties': {
              'title': 'Mapbox',
              'description': 'Washington, D.C.'
            }
          }
        ]
      };

      const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v10',
        center: [-77.032, 38.913],
        zoom: 15
      });

      // add markers to map
      // for (const feature of geojson.features) {
        // create a HTML element for each feature
        const el = document.createElement('div');
        el.className = 'marker';

        let langLat=[-77.032, 38.913];
        
        // make a marker for each feature and add it to the map
        let marker=new mapboxgl.Marker(el)
          .setLngLat(langLat)
          .setPopup(
            // new mapboxgl.Popup({ offset: 25 }) // add popups
            //   .setHTML(
            //     `<h3>${feature.properties.title}</h3><p>${feature.properties.description}</p>`
            //   )
          )
          .addTo(map);
      // }

          //taking data from pusher
          Echo.channel('updateTracker')
            .listen('BusMoved', (e) => {
                // console.log(e);
                // console.log(e.bid);
                if (e.bid==1){
                    updatePosition(e.lng,e.lat );
                    console.log(e.id);
                }
            });

    function updatePosition($lng, $lat ){
        let langLat=[$lng,$lat];
        // alert('ads');
        // marker.setCenter(langLat);
        marker.setLngLat(langLat)
            .addTo(map);
        map.setCenter(langLat);
    }
    </script>
  </body>
</html>
