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
        </div>
        <div class="row">
            <div class="story">
                <div class="form__group">
                    <div id='map' style='width: 100%; height: 500px;'></div>
                    <div>

                        <form class="trackStudent" action="{{route('send-request-for-pickup')}}" method="post" autocomplete="off">
                            @csrf
                            @if(Session::get('userId'))
                                <input type="hidden" name="id" value="{{Session::get('userId')}}">
                            @endif
                            <input type="hidden" name="longitude" value="">
                            <input type="hidden" name="latitude" value=""><br>
                            <input type="hidden" name="busId" value="1"><br>
                            <div class="form__group">
                                <button class="btn btn--green">Request For Pickup</button>
                            </div>
                        </form>

                        <form class="trackStudent" action="{{route('remove-request-for-pickup')}}" method="post" autocomplete="off">
                            @csrf
                            <input type="hidden" name="longitude" value="">
                            <input type="hidden" name="latitude" value=""><br>
                            <div class="form__group">
                                <button class="btn btn--red"> Remove Pickup Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let map;
        mapboxgl.accessToken =
            'pk.eyJ1IjoibWRoYWZpenVycmFobWFuIiwiYSI6ImNsN3hrNGZmbjA5cjgzcHA1bGI3MXdjdnoifQ.KhHG3AwXtjjg0jNYM5Z29w';
        map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v11', // style URL
            center: [90.4125, 23.8103], // starting position [lng, lat]
            zoom: 13, // starting zoom
            projection: 'globe' // display the map as a 3D globe
        });
        map.on('style.load',() => {
            map.setFog({}); // Set the default atmosphere style
        });

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }

        function showPosition(position) {
            document.querySelector('.trackStudent input[name="longitude"]').value = position.coords.longitude;
            document.querySelector('.trackStudent input[name="latitude"]').value = position.coords.latitude;
            updatePosition(position.coords.longitude, position.coords.latitude);
        }

        const el = document.createElement('div');
        el.className = 'marker2';
        const marker = new mapboxgl.Marker(el).setLngLat([90.4125, 23.8103])
            .addTo(map);

        // Echo.channel('updateTracker')
        //     .listen('BusMoved', (e) => {
        //         // console.log(e);
        //         updatePosition(e.lat, e.lng);
        //     });

        function updatePosition($lat, $lng) {
            let langLat = [$lat, $lng];
            marker.setLngLat(langLat)
                .addTo(map);
            map.setCenter(langLat);
        }
    </script>
@endsection

