@extends('layouts.frontend.master')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img4">
        <div class="container">
            <div class="breadcrumbs-inner">
                <div class="row y-middle">
                    <div class="col-lg-7">
                        <div class="breadcrumbs-wrap mb-48 md-mb-0">
                            <h2 class="page-title">
                                Sponsor Kami
                            </h2>
                            <p class="description">This very extraordinary feature, can make learning activities more
                                efficient</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="{{ asset('frontend/images/breadcrumbs/images/service-details.png') }}" alt="Images">
                        </div>
                    </div>
                </div>
                <div class="shape-animation">
                    <div class="dot-animate">
                        <img class="scale" src="{{ asset('frontend/images/breadcrumbs/shape/img2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Process Section Start -->
    <div class="rs-process process-style1 gray-bg14 pt-155 pb-160 md-pt-75 md-pb-80">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-5 md-mb-50">
                    <div class="ser-details">
                        <img class="js-tilt" src="{{ asset('images/sponsor-1.png') }}" alt="About">
                    </div>
                </div>
                <div class="col-lg-7 pl-60 md-pl-15">
                    <div class="sec-title">
                        <h2 class="title pb-35">
                            Sponsor 1
                        </h2>
                        <p class="desc pb-35" style="font-size: 24px">
                            Easily launch live assignments, quizzes, and tests.
                            Student results are automatically entered in the online gradebook.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row y-middle pt-130 md-pt-80">

                <div class="col-lg-7 pl-60 md-pl-15">
                    <div class="sec-title">
                        <h2 class="title pb-35">
                            Sponsor 2
                        </h2>
                        <p class="desc pb-35" style="font-size: 24px">
                            Class provides tools to help run and manage the class such as Class Roster, Attendance, and
                            more. With the Gradebook, teachers can review and grade tests and quizzes in real-time.

                        </p>
                    </div>
                </div>
                <div class="col-lg-5 md-mb-50">
                    <div class="ser-details">
                        <img class="js-tilt" src="{{ asset('images/sponsor-2.png') }}" alt="About">
                    </div>
                </div>
            </div>
            <div class="row y-middle pt-130 md-pt-80">
                <div class="col-lg-5 md-mb-50">
                    <div class="ser-details">
                        <img class="js-tilt" src="{{ asset('images/sponsor-3.png') }}" alt="About">
                    </div>
                </div>
                <div class="col-lg-7 pl-60 md-pl-15">
                    <div class="sec-title">
                        <h2 class="title pb-35">
                            Sponsor 1
                        </h2>
                        <p class="desc pb-35" style="font-size: 24px">
                            Teachers and teacher assistants can talk with students privately without leaving the Zoom
                            environment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Section End -->
@endsection
