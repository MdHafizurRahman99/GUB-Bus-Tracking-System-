@extends('frontEnd.master')
@section('title')
    Pickup Request
@endsection
@section('content')
    <section class="section-stories">
        <div class="bg-video">
            <video class="bg-video__content" autoplay muted loop>
                <source src="{{asset('frontEndAsset')}}/img/video.mp4" type="video/mp4" />
                <source src="{{asset('frontEndAsset')}}/img/video.webm" type="video/webm" />
                Your browser is not supported!
            </video>
        </div>

        <div class="u-center-text u-margin-bottom-big">
            {{--            <h2 class="heading-secondary">Select Login</h2>--}}
        </div>

        <div class="row">
            <div class="story">
                <div class="form__group">
                    <div id='map' style='width: 100%; height: 500px;'></div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let map;

        mapboxgl.accessToken =
            'pk.eyJ1IjoibWRoYWZpenVycmFobWFuIiwiYSI6ImNsN3hrNGZmbjA5cjgzcHA1bGI3MXdjdnoifQ.KhHG3AwXtjjg0jNYM5Z29w';
        map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v11', // style URL
            center: [-74.5, 40], // starting position [lng, lat]
            zoom: 13, // starting zoom
            projection: 'globe' // display the map as a 3D globe
        });

        map.on('style.load', () => {
            map.setFog({}); // Set the default atmosphere style
        });

        const el = document.createElement('div');
        el.className = 'marker';

        const marker = new mapboxgl.Marker(el
            //     {
            //     color: "rgba(255,3,3,0.95)",
            //     draggable: false
            // }
        ).setLngLat([-74.5, 40])
            .addTo(map);
        //taking data from pusher
        Echo.channel('updateTracker')
            .listen('BusMoved', (e) => {
                // console.log(e);
                // console.log(e.busId);
                if (e.busId == 1) {
                    updatePosition(e.lng, e.lat);
                    // console.log(e.id);
                }
            });
        function updatePosition($lng, $lat) {
            let langLat = [$lng, $lat];
            // alert('ads');
            // marker.setCenter(langLat);
            marker.setLngLat(langLat)
                .addTo(map);
            map.setCenter(langLat);
        }

    </script>
@endsection

