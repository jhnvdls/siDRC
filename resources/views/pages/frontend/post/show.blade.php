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
                <div class="col-lg-8 md-mb-50">
                    <div class="blog-details">
                        <div class="bs-img mb-50">
                            <a href="#">
                                <img src="{{ asset($post->image) }}" alt="Images"></a>
                            </a>
                        </div>
                        <div class="blog-full">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <h3 class="blog-title">
                                        {{ $post->title }}
                                    </h3>
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fi fi-rr-calendar"></i>
                                                {{ $post->created_at->format('d M, Y') }}
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="blog-content-full">
                                <p style="text-align: justify">{!! $post->content !!}</p>
                                {{-- <h3 class="title title3 pb-30">Leave a Reply</h3>
                                <p class="pb-20">Your email address will not be published. Required fields are marked *</p>
                                <div class="comment-note">
                                    <div id="form-messages"></div>
                                    <form id="contact-form" method="post"
                                        action="https://rstheme.com/products/html/swipy/mailer.php">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                    <input class="from-control" type="text" id="name" name="name"
                                                        placeholder="Name*" required="">
                                                </div>
                                                <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                    <input class="from-control" type="text" id="email" name="email"
                                                        placeholder="E-Mail*" required="">
                                                </div>
                                                <div class="col-lg-12 mb-30">
                                                    <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <input class="readon post" type="submit" value="Post Comment">
                                            </div>
                                        </fieldset>
                                    </form>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 pl-25 md-pl-15">
                    <div class="widget-area">
                        <div class="search-widget mb-50">
                            <div class="search-wrap">
                                <form action="{{ route('posts') }}" method="GET">
                                    <input type="search" placeholder="Searching..." name="search" class="search-input"
                                        value="{{ request()->query('search') }}">
                                    <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="recent-posts mb-50">
                            <div class="widget-title">
                                <h3 class="title">Recent Posts</h3>
                            </div>
                            @foreach ($recent_posts as $recent_post)
                                <div class="recent-post-widget @if ($loop->first) no-border @endif">
                                    <div class="post-img">
                                        <a href="{{ route('posts.show', $recent_post->slug) }}"><img
                                                src="{{ asset($recent_post->image) }}" alt=""></a>
                                    </div>
                                    <div class="post-desc">
                                        <span class="date-post"> <i class="fi fi-rr-calendar"></i>July 26, 2022</span>
                                        <a href="{{ route('posts.show', $recent_post->slug) }}">
                                            {{ $recent_post->title }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->
@endsection
