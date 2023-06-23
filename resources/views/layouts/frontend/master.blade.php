<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! SEO::generate(true) !!}
    <link href="{{ asset('frontend/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/fav.png') }}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <!-- Uicons Regular Rounded css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/uicons-regular-rounded.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/flaticon.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/off-canvas.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/rsmenu-main.css') }}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/rs-spacing.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">

    @stack('custom-styles')
</head>

<body class="defult-home">
    <div class="offwrap"></div>

    <!--Preloader start here-->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="{{ asset('frontend/images/fav.png') }}"
                        alt="Swipy Creative Agency Html Template ">
                </div>
            </div>
        </div>
    </div>
    <!--Preloader area end here-->

    <!-- Main content Start -->
    <div class="main-content">
        @include('layouts.frontend.header')

        @yield('content')

    </div>
    <!-- Main content End -->

    @include('layouts.frontend.footer')


    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!--begin::Modals-->
    @include('layouts.frontend.modal')
    <!--end::Modals-->

    @include('layouts.frontend.script')

    @stack('custom-scripts')
</body>

</html>
