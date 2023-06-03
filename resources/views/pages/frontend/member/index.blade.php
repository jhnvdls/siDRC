@extends('layouts.frontend.master')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img5">
        <div class="container">
            <div class="breadcrumbs-inner">
                <div class="row y-middle">
                    <div class="col-lg-6 md-mb-50">
                        <div class="breadcrumbs-wrap">
                            <h1 class="page-title">
                                Meet Our Team
                            </h1>
                            <p class="description">This very extraordinary feature, can make learning activities more
                                efficient</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-img">
                            <img class="js-tilt" src="frontend/images/breadcrumbs/images/team-image.png" alt="Images">
                        </div>
                    </div>
                </div>
                <div class="shape-animation">
                    <div class="team-animate">
                        <img class="scale" src="frontend/images/breadcrumbs/shape/img5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Team Start -->
    <div class="rs-team team-style1 pt-150 pb-150 md-pt-80 md-pb-80">
        <div class="container">
            {{-- <div class="row">
                @foreach ($members as $member)
                    <div class="col-xl-3 col-md-6 mb-30">
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="image-wrap">
                                    <a href="javascript:;">
                                        <img src="{{ asset($member->image) }}" alt="Images">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h3 class="team-name">
                                        <a href="javascript:;">{{ $member->name }}</a>
                                    </h3>
                                    <span class="team-title">{{ $member->position }}</span>
                                    <div class="social-icons">
                                        <a href="{{ $member->linkedin }}">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                        <a href="{{ $member->instagram }}">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                        <a href="{{ $member->twitter }}">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="image-wrap">
                                <a href="team-single.html">
                                    <img src="frontend/images/team/tm1.jpg" alt="Images">
                                </a>
                            </div>
                            <div class="team-content">
                                <h3 class="team-name"><a href="team-single.html">Tasnia Tasnim</a></h3>
                                <span class="team-title">Senior Consultant</span>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="image-wrap">
                                <a href="team-single.html">
                                    <img src="frontend/images/team/tm2.jpg" alt="Images">
                                </a>
                            </div>
                            <div class="team-content">
                                <h3 class="team-name"><a href="team-single.html">Abdullah Marsad</a></h3>
                                <span class="team-title">Business Advisor</span>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="image-wrap">
                                <a href="team-single.html">
                                    <img src="frontend/images/team/tm3.jpg" alt="Images">
                                </a>
                            </div>
                            <div class="team-content">
                                <h3 class="team-name"><a href="team-single.html">Shannon Garcia</a></h3>
                                <span class="team-title">Business Advisor</span>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="image-wrap">
                                <a href="team-single.html">
                                    <img src="frontend/images/team/tm4.jpg" alt="Images">
                                </a>
                            </div>
                            <div class="team-content">
                                <h3 class="team-name"><a href="team-single.html">Thomas Omazan</a></h3>
                                <span class="team-title">President & CEO</span>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 xl-mb-30">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="image-wrap">
                                <a href="team-single.html">
                                    <img src="frontend/images/team/tm5.jpg" alt="Images">
                                </a>
                            </div>
                            <div class="team-content">
                                <h3 class="team-name"><a href="team-single.html">Groze Millard</a></h3>
                                <span class="team-title">IT Consultant</span>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 xl-mb-30">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="image-wrap">
                                <a href="team-single.html">
                                    <img src="frontend/images/team/tm6.jpg" alt="Images">
                                </a>
                            </div>
                            <div class="team-content">
                                <h3 class="team-name"><a href="team-single.html">Shone Watpren</a></h3>
                                <span class="team-title">Finance Consultant</span>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 sm-mb-30">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="image-wrap">
                                <a href="team-single.html">
                                    <img src="frontend/images/team/tm7.jpg" alt="Images">
                                </a>
                            </div>
                            <div class="team-content">
                                <h3 class="team-name"><a href="team-single.html">Clarke Griffin</a></h3>
                                <span class="team-title">Senior Consultant</span>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="image-wrap">
                                <a href="team-single.html">
                                    <img src="frontend/images/team/tm8.jpg" alt="Images">
                                </a>
                            </div>
                            <div class="team-content">
                                <h3 class="team-name"><a href="team-single.html">Koile Lavendra</a></h3>
                                <span class="team-title">Business Advisor</span>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
