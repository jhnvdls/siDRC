@extends('layouts.frontend.master')
@section('content')
    <div class="rs-banner banner-main-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="content-wrap">
                        <h1 class="title"><span style="color: #2192FF">
                                Del Robotics Club
                            </span> <span style="color: #2F327D">Publication</span></h1>
                        <div class="description">
                            <p style="font-size: 22px">
                                “A robot may not injure a human being, or, through inaction, allow human being to come to
                                harm”
                            </p>
                            <span style="font-size: 22px; color: #696984; margin-top:0">Isaac Asimov (1920-1992)</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="main-img text-right md-text-center">
                        <img src="{{ asset('images/blog.png') }}" alt="Images">
                        {{-- <div class="main-img-bg1">
                        <img src="" alt="Images">
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section Start -->
    <div class="rs-inner-blog pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 md-mb-50">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-lg-12 mb-50">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <a href="{{ route('posts.show', $post->slug) }}">
                                            <img src="{{ asset($post->image) }}" alt="Images"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <ul class="btm-cate">
                                                <li>
                                                    <div class="postedby">
                                                        <div class="info">
                                                            <span class="name">
                                                                <img src="frontend/images/blog/style3/inner/bl.png"
                                                                    alt="Images">
                                                                Admin
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="blog-date">
                                                        <i class="fi fi-rr-calendar"></i>
                                                        {{ $post->created_at->format('d M, Y') }}
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="blog-title"><a href="{{ route('posts.show', $post->slug) }}">
                                                {{ $post->title }}</a>
                                        </h3>
                                        <div class="blog-desc">
                                            {{ $post->excerpt }}
                                        </div>
                                        <div class="blog-button inner-btn">
                                            <a class="blog-btn" href="{{ route('posts.show', $post->slug) }}">
                                                Continue Reading
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 pl-25 md-pl-15">
                    <div class="widget-area">
                        <div class="search-widget mb-50">
                            <div class="search-wrap">
                                <form action="" method="GET">
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
