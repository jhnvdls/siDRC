@extends('layouts.frontend.master')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1">
        <div class="container">
            <div class="breadcrumbs-inner">
                <div class="row y-middle">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img class="js-tilt" src="{{ asset('images/about.png') }}" alt="Images">
                        </div>
                    </div>
                    <div class="col-lg-6" style="padding: 50px">
                        <div class="breadcrumbs-wrap">
                            <h1 class="page-title">
                                Tentang DRC
                            </h1>
                            <p class="description">Del Robotics Club merupakan dstfbgdnbgn fdgfdgsdd....</p>
                        </div>
                    </div>
                </div>
                <div class="shape-animation">
                    <div class="ball-animate">
                        <img class="scale" src="{{ asset('frontend/images/breadcrumbs/shape/img1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->



    <!-- Services Section Start -->
    @foreach ($setting as $item)

        <div class="rs-services services-style5 black-bg2 pt-125 pb-130 md-pt-75 md-pb-80">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-xl-6 col-md-6 xl-mb-30">
                        <div class="services-item">
                            <div class="services-wrap" style="height: 400px">
                                <div class="services-img">
                                    <img src="{{asset('images/'. $item->visi_logo)}}" alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">VISI</h2>
                                    <p class="services-txt">{{$item->visi}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 xl-mb-30">
                        <div class="services-item">
                            <div class="services-wrap" style="height: 400px">
                                <div class="services-img">
                                    <img src="{{asset('images/'. $item->misi_logo)}}" alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">Misi</h2>
                                    <ul class="services-txt">
                                        <li>{{$item->misi}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
    
    <!-- Services Section End -->

    <div class="rs-contact contact-style2 contact-modfiy5 pt-130 md-pt-80">
        <div class="container">
            <div class="map-canvas pt-130 md-pt-80">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3673457470372!2d99.14605787488244!3d2.3832151975961144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sInstitut%20Teknologi%20Del!5e0!3m2!1sid!2sid!4v1687533715892!5m2!1sid!2sid"
                    width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        {{-- <!-- About Start -->
    <div class="rs-about about-style1 pt-150 pb-150 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-50">
                    <div class="sec-title">
                        <span class="sub-text primary-color">
                            About Swipy
                        </span>
                        <h2 class="title pb-35">
                            We create digital Ideas that are bigger, bolder, braver and better.
                        </h2>
                        <p class="desc pb-60 md-pb-40">
                            We create digital ideas that are bigger, bolder, braver and better. We believe in good ideas
                            flexibility and precission We’re world’s Our Special Team best consulting & finance solution
                            provider. Wide range of web and software development services.
                        </p>
                        <!-- Counter Start -->
                        <div class="rs-counter counter-style1 counter-modify4">
                            <div class="row">
                                <div class="col-lg-4 md-mb-30">
                                    <div class="rs-counter-list">
                                        <div class="count-text">
                                            <div class="count-number">
                                                <span class="rs-count">10</span>
                                                <span class="prefix">K+</span>
                                            </div>
                                            <span class="title">Year of experience</span>
                                        </div>
                                        <div class="separator-dot"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 md-mb-30">
                                    <div class="rs-counter-list">
                                        <div class="count-text">
                                            <div class="count-number">
                                                <span class="rs-count">234</span>
                                                <span class="prefix">K+</span>
                                            </div>
                                            <span class="title">Simply services views on</span>
                                        </div>
                                        <div class="separator-dot"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="rs-counter-list">
                                        <div class="count-text">
                                            <div class="count-number">
                                                <span class="rs-count">10</span>
                                                <span class="prefix">K+</span>
                                            </div>
                                            <span class="title">Get unique experience</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img2">
                        <img src="frontend/images/about/about-img2.png" alt="About">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End --> --}}
    @endsection
