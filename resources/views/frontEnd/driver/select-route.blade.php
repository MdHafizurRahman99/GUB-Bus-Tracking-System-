@extends('frontEnd.master')
@section('title')
Select Route & Bus
@endsection
@section('content')
<section class="section-about">
    <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">Select Route & Bus</h2>
    </div>

    <div class="row">
        <div class="col-1-of-2">
            <h4 class="heading-tertiary u-margin-bottom-small">
                Select Route
            </h4>
            {{-- <p class="paragraph">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
                ipsum sapiente aspernatur libero repellat quis consequatur ducimus
                quam nisi exercitationem omnis earum qui.
            </p> --}}
            <select class="form-control" name="route_id"  >
                <option value="">Select a Route</option>
                @foreach($routes as $route)
                    <option value="{{$route->id}}">{{$route->route_name}}</option>
                @endforeach
            </select>
            <br>
            <h4 class="heading-tertiary u-margin-bottom-small">
                Select Bus
            </h4>
            <select class="form-control" name="bus_id"  >
                <option value="">Select a Bus</option>
                @foreach($buses as $bus)
                    <option value="{{$bus->id}}">{{$bus->bus_name}}</option>
                @endforeach
            </select>

            <a href="{{route('bus-location-update')}}" class="btn-text">Next &rarr;</a>
        </div>
        
        <div class="col-1-of-2">
            <div class="composition">
                <img
                    srcset="{{asset('frontEndAsset')}}/img/nat-1.jpg 300w, img/nat-1-large.jpg 1000w"
                    sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                    alt="Photo 1"
                    class="composition__photo composition__photo--p1"
                    src="{{asset('frontEndAsset')}}/img/nat-1-large.jpg"
                />

                <img
                    srcset="{{asset('frontEndAsset')}}/img/nat-2.jpg 300w, img/nat-2-large.jpg 1000w"
                    sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                    alt="Photo 2"
                    class="composition__photo composition__photo--p2"
                    src="{{asset('frontEndAsset')}}/img/nat-2-large.jpg"
                />

                <img
                    srcset="{{asset('frontEndAsset')}}/img/nat-3.jpg 300w, img/nat-3-large.jpg 1000w"
                    sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                    alt="Photo 3"
                    class="composition__photo composition__photo--p3"
                    src="{{asset('frontEndAsset')}}/img/nat-3-large.jpg"
                />

            <!--
                                  <img src="{{asset('frontEndAsset')}}/img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                                  <img src="{{asset('frontEndAsset')}}/img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                                  <img src="{{asset('frontEndAsset')}}/img/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                                  -->
            </div>
        </div>
    </div>
</section>
@endsection
