<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--    <link rel="stylesheet" href="{{ asset('js/jquery-3.6.0.min.js') }}">--}}
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css' rel='stylesheet' />

    <style>
    .marker {
        background-image: url("{{asset('images/icon/user/user-location.svg')}}");
        /*background-size: cover;*/
        width: 30px;
        height: 30px;
        border-radius: 50%;
        cursor: pointer;
    }
    </style>

    <title>Request For Pickup</title>
</head>

<body onload="getLocation();">
    <!-- <div>
        {{--    <button onclick="updatePosition(-79.4512,42.6598)">Update Position</button>--}}
        <button id="start">Start</button>
        <button onClick="window.location.reload();"> stop</button>
    </div> -->
    <div id='map' style='width: 600px; height: 600px;'></div>

    <div>
        <form class="trackStudent" action="{{route('send-request-for-pickup')}}" method="post" autocomplete="off">
            @csrf
{{--            <label for="">Name</label>--}}
{{--            <input type="text" name="name" require value=""><br>--}}
{{--            <label for="">Id</label>--}}
{{--            <input type="text" name="id" require value=""><br>--}}
            <input type="hidden" name="longitude" value="">
            <input type="hidden" name="latitude" value=""><br>
            <div class="form__group">
                <button class="btn btn--green">Request For Pickup</button>
            </div>

        </form>
    </div>

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
        zoom: 15, // starting zoom
        projection: 'globe' // display the map as a 3D globe
    });
    map.on('style.load', () => {
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
    el.className = 'marker';
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
    <script>
    // const start = document.querySelector("#start");
    // const stop = document.querySelector("#stop");

    // start.addEventListener("click", () => {
    //        navigator.geolocation.watchPosition(data=>{
    //            // console.log(data);
    //            updatePosition(data.coords.longitude,data.coords.latitude);
    //             $.ajax({
    //                 url:'/bus-moving',
    //                 method:"post",
    //                 // data: { data: JSON.stringify(data)},
    //                 data: { lng:data.coords.longitude,lat:data.coords.latitude,bid:1, _token: '{{csrf_token()}}' },
    //                 success:function (res) {
    //                     console.log(res);
    //                 }
    //             })
    //          },error=>console.log(error),
    //            {
    //                enableHighAccuracy:true
    //            }
    //        )

    // });
    </script>
    {{--<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>--}}

</body>

</html>
