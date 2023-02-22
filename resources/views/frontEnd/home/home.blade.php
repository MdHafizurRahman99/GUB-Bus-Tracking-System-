@extends('frontEnd.master')
@section('title')
    Home
@endsection
@section('content')
    <header class="header">
        <div class="header__logo-box">
            <a href="{{route('/')}}">
                <img src="{{asset('frontEndAsset')}}/img/logo-white.png" alt="Logo" class="header__logo" />
            </a>
        </div>

        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">GBTS</span>
                <span class="heading-primary--sub">Green Bus Tracking System</span>
            </h1>

            <a href="{{route('select-login')}}" class="btn btn--white btn--animated">Lets Go!</a>
        </div>
    </header>
    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">Green Bus Tracking System</h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small">
                        Committed To Our GUB family
                    </h3>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
                        ipsum sapiente aspernatur libero repellat quis consequatur ducimus
                        quam nisi exercitationem omnis earum qui.
                    </p>

                    <h3 class="heading-tertiary u-margin-bottom-small">
                        promises Safe Destination
                    </h3>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Asperiores nulla deserunt voluptatum nam.
                    </p>

                    <a href="#" class="btn-text">Learn more &rarr;</a>
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

        <section class="section-features">
            <div class="row">
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-world"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Map</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aperiam, ipsum sapiente aspernatur.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-compass"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Route</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aperiam, ipsum sapiente aspernatur.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-map"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            Find your way
                        </h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aperiam, ipsum sapiente aspernatur.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-heart"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            Hear from us
                        </h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aperiam, ipsum sapiente aspernatur.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-tours" id="section-tours"></section>

        <section class="section-stories">
            <div class="bg-video">
                <video class="bg-video__content" autoplay muted loop>
                    <source src="{{asset('frontEndAsset')}}/img/video.mp4" type="video/mp4" />
                    <source src="{{asset('frontEndAsset')}}/img/video.webm" type="video/webm" />
                    Your browser is not supported!
                </video>
            </div>

            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">Words! From our GUB family</h2>
            </div>

            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img
                            src="{{asset('frontEndAsset')}}/img/nat-8.jpg"
                            alt="Person on a tour"
                            class="story__img"
                        />
                        <figcaption class="story__caption">Anik Ahmed</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            Having a online Gub bus tracking is Fun!
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aperiam, ipsum sapiente aspernatur libero repellat quis
                            consequatur ducimus quam nisi exercitationem omnis earum qui.
                            Aperiam, ipsum sapiente aspernatur libero repellat quis
                            consequatur ducimus quam nisi exercitationem omnis earum qui.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img
                            src="{{asset('frontEndAsset')}}/img/nat-9.jpg"
                            alt="Person on a tour"
                            class="story__img"
                        />
                        <figcaption class="story__caption">Maruf Hossain</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            WOW! This Bus System is super nice!
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aperiam, ipsum sapiente aspernatur libero repellat quis
                            consequatur ducimus quam nisi exercitationem omnis earum qui.
                            Aperiam, ipsum sapiente aspernatur libero repellat quis
                            consequatur ducimus quam nisi exercitationem omnis earum qui.
                        </p>
                    </div>
                </div>
            </div>

            <div class="u-center-text u-margin-top-huge">
                <a href="#" class="btn-text">Read all Comments &rarr;</a>
            </div>
        </section>

        <section class="section-book">
            <div class="row">
                <div class="book">
                    <div class="book__form">
                        <form action="#" class="form">
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">leave your thoughts</h2>
                            </div>

                            <div class="form__group">
                                <input
                                    type="text"
                                    class="form__input"
                                    placeholder="Full name"
                                    id="name"
                                    required
                                />
                                <label for="name" class="form__label">Full name</label>
                            </div>

                            <div class="form__group">
                                <input
                                    type="email"
                                    class="form__input"
                                    placeholder="Email address"
                                    id="email"
                                    required
                                />
                                <label for="email" class="form__label">Email address</label>
                            </div>

                            <div class="form__group">
                                <button class="btn btn--green">Next step &rarr;</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
