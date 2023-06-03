@extends('layouts.frontend.master')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img7">
        <div class="container">
            <div class="breadcrumbs-inner shop-style">
                <h1 class="page-title title3">
                    Blog Single
                </h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Blog Section Start -->
    <div class="rs-inner-blog pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 md-mb-50">
                    <div class="blog-details">
                        <div class="bs-img mb-50">
                            <a href="#">
                                <img src="{{ asset($event->image) }}" width="100%" alt="Images"></a>
                            </a>
                        </div>
                        <div class="blog-full">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <h3 class="blog-title">
                                        {{ $event->title }}
                                    </h3>
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fi fi-rr-calendar"></i>
                                                {{ \Carbon\Carbon::parse($event->start_date)->format('d M, Y') . ' - ' . \Carbon\Carbon::parse($event->end_date)->format('d M, Y') }}
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="blog-content-full">
                                <p style="text-align: justify">{!! $event->content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->
@endsection
