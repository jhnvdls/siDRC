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
            <div class="row">
                @foreach ($members as $member)
                    <div class="col-xl-3 col-md-6 mb-30">
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="image-wrap">
                                    <a href="javascript:;"
                                        onclick="handle_open_modal('{{ route('member.show', $member->id) }}', '#customModal', 'GET')">
                                        <img src="{{ asset('images/members/' . $member->image) }}" alt="Images"
                                            style="width: 100%; height: 300px">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h3 class="team-name">
                                        <a href="javascript:;"
                                            onclick="handle_open_modal('{{ route('member.show', $member->id) }}', '#customModal', 'GET')">{{ $member->name }}</a>
                                    </h3>
                                    <span class="team-title">{{ $member->position->name }}</span>
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
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
