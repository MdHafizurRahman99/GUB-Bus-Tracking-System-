@extends('frontEnd.master')
@section('title')
    Updating Bus Location....
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
{{--                    {{route('user-login')}}--}}
                    <button class="btn btn--green" id="start" >Start</button>
                    <button class="btn btn--green pl-3"onClick="window.location.reload();">Stop</button>
                    <div id='map' style='width: 100%; height: 500px;'></div>
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
        map.on('style.load', () => {
            map.setFog({}); // Set the default atmosphere style
        });

        const el = document.createElement('div');
        el.className = 'marker';
        const user = document.createElement('div');
        user.className = 'marker2';
        const userMarker=new mapboxgl.Marker(user);
        const marker = new mapboxgl.Marker(el
            //     {
            //     color: "rgba(255,3,3,0.95)",
            //     draggable: false
            // }
        ).setLngLat([90.4125, 23.8103])
            .addTo(map);

        //change marker status for every student
        Echo.channel('updateTracker')
            .listen('PickUpRequest',(e) => {
                // console.log(e);
                if (e.check == 1) {
                    pickUpPosition(e.lng, e.lat);
                    // console.log(e);
                }
                else if(e.check==2){
                    removePosition(e.lng, e.lat);
                }
            });

        function updatePosition($lat, $lng) {
            let langLat = [$lat, $lng];
            // alert('ads');
            // marker.setCenter(langLat);
            marker.setLngLat(langLat)
                .addTo(map);
            map.setCenter(langLat);
        }
        function pickUpPosition($lat, $lng) {
            let langLat = [$lat, $lng];
            // alert('ads');
            // marker.setCenter(langLat);
            userMarker.setLngLat(langLat)
                .addTo(map);
        }

        function removePosition($lat, $lng) {
            let langLat = [$lat, $lng];
            userMarker.remove();
        }
    </script>
//accessing backend variable 
    <script>
        var variable = @json($pickUpRequests);
        console.log(variable);
    </script>

    <script>
        const start = document.querySelector("#start");
        const stop = document.querySelector("#stop");
        start.addEventListener("click", () => {
            navigator.geolocation.watchPosition(data => {
                // console.log(data);
                updatePosition(data.coords.longitude, data.coords.latitude);
                $.ajax({
                    url: '/bus-moving',
                    method: "post",
                    // data: { data: JSON.stringify(data)},
                    data: {
                        lng: data.coords.longitude,
                        lat: data.coords.latitude,
                        busId: 1,
                        _token: '{{csrf_token()}}'
                    },
                    success: function(res) {
                        // console.log(res);
                    }
                })
            }, error => console.log(error), {
                enableHighAccuracy: true
            })
        });
    </script>
@endsection
