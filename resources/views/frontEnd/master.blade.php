
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @yield('css')
    <link
        href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
        rel="stylesheet"
    />

<!--<link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/icon-font.css">-->

    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/style.css" />
    <link rel="shortcut icon" type="image/png" href="{{asset('frontEndAsset')}}/img/favicon.png" />

    {{--    ********mapbox*******--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css' rel='stylesheet' />
    <style>
        .marker {
            background-image: url("{{asset('images/icon/bus/bus.svg')}}");
            /* background-size: cover; */
            width: 30px;
            height: 30px;
            background-repeat: no-repeat;
            border-radius: 50%;
            cursor: pointer;
        }
        .marker2 {
            background-image: url("{{asset('images/icon/user/user-location.svg')}}");
            /*background-size: cover;*/
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>
    {{--    ********mapbox*******--}}

    <title>GUB | @yield('title')</title>
</head>

<body onload="getLocation();">

@include('frontEnd.include.header')

@yield('content')

@include('frontEnd.include.footer')
@yield('script')

{{--<div class="popup" id="popup">--}}
{{--    <div class="popup__content">--}}
{{--        <div class="popup__left">--}}
{{--            <img src="{{asset('frontEndAsset')}}/img/nat-8.jpg" alt="Tour photo" class="popup__img" />--}}
{{--            <img src="{{asset('frontEndAsset')}}/img/nat-9.jpg" alt="Tour photo" class="popup__img" />--}}
{{--        </div>--}}
{{--        <div class="popup__right">--}}
{{--            <a href="#section-tours" class="popup__close">&times;</a>--}}
{{--            <h2 class="heading-secondary u-margin-bottom-small">--}}
{{--                Start booking now--}}
{{--            </h2>--}}
{{--            <h3 class="heading-tertiary u-margin-bottom-small">--}}
{{--                Important &ndash; Please read these terms before booking--}}
{{--            </h3>--}}
{{--            <p class="popup__text">--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do--}}
{{--                eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed sed--}}
{{--                risus pretium quam. Aliquam sem et tortor consequat id. Volutpat--}}
{{--                odio facilisis mauris sit amet massa vitae. Mi bibendum neque--}}
{{--                egestas congue. Placerat orci nulla pellentesque dignissim enim sit.--}}
{{--                Vitae semper quis lectus nulla at volutpat diam ut venenatis.--}}
{{--                Malesuada pellentesque elit eget gravida cum sociis natoque--}}
{{--                penatibus et. Proin fermentum leo vel orci porta non pulvinar neque--}}
{{--                laoreet. Gravida neque convallis a cras semper. Molestie at--}}
{{--                elementum eu facilisis sed odio morbi quis. Faucibus vitae aliquet--}}
{{--                nec ullamcorper sit amet risus nullam eget. Nam libero justo laoreet--}}
{{--                sit. Amet massa vitae tortor condimentum lacinia quis vel eros--}}
{{--                donec. Sit amet facilisis magna etiam. Imperdiet sed euismod nisi--}}
{{--                porta.--}}
{{--            </p>--}}
{{--            <a href="#" class="btn btn--green">Book now</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


</body>
</html>

