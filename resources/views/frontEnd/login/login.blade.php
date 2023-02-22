@extends('frontEnd.master')
@section('title')
    Select Login
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
            <h2 class="heading-secondary">Select Login</h2>
        </div>

        <div class="row">
            <div class="story">
                <div class="form__group">
                    <a href="{{route('user-login')}}"><button class="btn btn--green"  >User Login</button></a>

                    <a href="{{route('driver-login')}}"><button class="btn btn--green pl-3">Driver Login</button></a>

                    <a href="{{route('login')}}"><button class="btn btn--green m-5 p-5">Admin Login</button></a>
                </div>
            </div>
        </div>


    </section>
@endsection
