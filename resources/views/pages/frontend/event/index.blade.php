@extends('layouts.frontend.master')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img9">
        <div class="container">
            <div class="breadcrumbs-inner project-inner-style1">
                <div class="row y-middle">
                    <div class="col-lg-6 md-mb-50">
                        <div class="breadcrumbs-wrap">
                            <h1 class="page-title">
                                <span style="color: #2F327D">Events</span> <span style="color: #2192FF">
                                    Del Robotics Club
                                </span>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pro-img2">
                            <img class="js-tilt" src="frontend/images/breadcrumbs/images/port2.png" alt="Images">
                        </div>
                    </div>
                </div>
                <div class="shape-animation">
                    <div class="line-animate">
                        <img class="veritcal" src="frontend/images/breadcrumbs/shape/img6.png" alt="">
                    </div>
                    <div class="circle-animate">
                        <img class="spine" src="frontend/images/breadcrumbs/shape/img3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Project Start -->
    <div class="rs-project project-style1 project-modify12 pt-145 pb-150 md-pt-75 md-pb-80">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <span class="sub-text">
                    Events
                </span>
                <h2 class="title">
                    Our Events
                </h2>
            </div>
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="project-item">
                            <div class="project-img">
                                <a href="{{ route('events.show', $event->slug) }}">
                                    <img src="{{ asset('images/events/' . $event->image) }}" alt="Images">
                                </a>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="{{ route('events.show', $event->slug) }}">
                                        {{ $event->title }}
                                    </a></h3>
                                <span class="category"><a href="{{ route('events.show', $event->slug) }}">
                                        {{ \Carbon\Carbon::parse($event->start_date)->format('d F Y') . ' - ' . \Carbon\Carbon::parse($event->end_date)->format('d F Y') }}
                                    </a></span>

                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="project-item">
                        <div class="project-img">
                            <a href="portfolio-single-column.html">
                                <img src="frontend/images/project/style1/port1.jpg" alt="Images">
                            </a>
                        </div>
                        <div class="project-content">
                            <span class="category"><a href="portfolio-single-column.html">Branding</a></span>
                            <h3 class="title"><a href="portfolio-single-column.html">Branding Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="project-item">
                        <div class="project-img">
                            <a href="portfolio-single-column.html">
                                <img src="frontend/images/project/style1/port2.jpg" alt="Images">
                            </a>
                        </div>
                        <div class="project-content">
                            <span class="category"><a href="portfolio-single-column.html">Branding</a></span>
                            <h3 class="title"><a href="portfolio-single-column.html">Graphic Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="project-item">
                        <div class="project-img">
                            <a href="portfolio-single-column.html">
                                <img src="frontend/images/project/style1/port3.jpg" alt="Images">
                            </a>
                        </div>
                        <div class="project-content">
                            <span class="category"><a href="portfolio-single-column.html">Graphic Design</a></span>
                            <h3 class="title"><a href="portfolio-single-column.html">Label Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="project-item">
                        <div class="project-img">
                            <a href="portfolio-single-column.html">
                                <img src="frontend/images/project/style1/port4.jpg" alt="Images">
                            </a>
                        </div>
                        <div class="project-content">
                            <span class="category"><a href="portfolio-single-column.html">Motion Design</a></span>
                            <h3 class="title"><a href="portfolio-single-column.html">Slow Ads</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="project-item">
                        <div class="project-img">
                            <a href="portfolio-single-column.html">
                                <img src="frontend/images/project/style1/port5.jpg" alt="Images">
                            </a>
                        </div>
                        <div class="project-content">
                            <span class="category"><a href="portfolio-single-column.html">Branding</a></span>
                            <h3 class="title"><a href="portfolio-single-column.html">Branding Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="project-item">
                        <div class="project-img">
                            <a href="portfolio-single-column.html">
                                <img src="frontend/images/project/style1/port6.jpg" alt="Images">
                            </a>
                        </div>
                        <div class="project-content">
                            <span class="category"><a href="portfolio-single-column.html">Branding</a></span>
                            <h3 class="title"><a href="portfolio-single-column.html">Muzo Redesign</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 sm-mb-30">
                    <div class="project-item">
                        <div class="project-img">
                            <a href="portfolio-single-column.html">
                                <img src="frontend/images/project/style1/port7.jpg" alt="Images">
                            </a>
                        </div>
                        <div class="project-content">
                            <span class="category"><a href="portfolio-single-column.html">Branding</a></span>
                            <h3 class="title"><a href="portfolio-single-column.html">Orla Branding</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 sm-mb-30">
                    <div class="project-item">
                        <div class="project-img">
                            <a href="portfolio-single-column.html">
                                <img src="frontend/images/project/style1/port8.jpg" alt="Images">
                            </a>
                        </div>
                        <div class="project-content">
                            <span class="category"><a href="portfolio-single-column.html">Branding</a></span>
                            <h3 class="title"><a href="portfolio-single-column.html">Coffe Ads</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="project-item">
                        <div class="project-img">
                            <a href="portfolio-single-column.html">
                                <img src="frontend/images/project/style1/port9.jpg" alt="Images">
                            </a>
                        </div>
                        <div class="project-content">
                            <span class="category"><a href="portfolio-single-column.html">Branding</a></span>
                            <h3 class="title"><a href="portfolio-single-column.html">Nike Air Women</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->
@endsection
