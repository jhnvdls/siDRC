<!--Full width header Start-->
<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header header-transparent">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row-table">
                    <div class="col-cell header-logo">
                        <div class="logo-area">
                            <a href="index.html">
                                <img class="normal-logo" src="{{ asset('images/Logo.png') }}" alt="logo">
                                <img class="sticky-logo" src="{{ asset('images/Logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <nav class="rs-menu hidden-md">
                                    <ul class="nav-menu">
                                        <li class="{{ request()->is('/') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="{{ request()->is('about') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('about') }}">About</a>
                                        </li>
                                        <li class="{{ request()->is('member') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('member') }}">Member</a>
                                        </li>
                                        <li class="{{ request()->is('posts') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('posts') }}">Blog</a>
                                        </li>
                                        {{-- <li class="{{ request()->is('sponsor') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('sponsor') }}">Sponsor</a>
                                        </li> --}}
                                        <li class="{{ request()->is('events') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('events') }}">Event</a>
                                        </li>
                                    </ul> <!-- //.nav-menu -->
                                </nav>
                            </div> <!-- //.main-menu -->
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="expand-btn-inner">
                            <ul>
                                {{-- <li class="search-parent">
                                    <a class="hidden-xs rs-search" href="#">
                                        <i class="fi fi-rr-search"></i>
                                    </a>
                                    <div class="sticky_form">
                                        <form role="search" class="bs-search search-form" method="get">
                                            <div class="search-wrap">
                                                <label class="screen-reader-text active">
                                                    Search for: </label>
                                                <input type="search" placeholder="Searching..." name="s"
                                                    class="search-input" value="">
                                                <button type="submit" value="Search"><i
                                                        class="fi fi-rr-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </li> --}}
                                <li class="nav-link">
                                    <a id="nav-expander" class="nav-expander bar" href="#">
                                        <div class="bar">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Canvas Menu start -->
        <nav class="right_menu_togle menu-wrap-off  hidden-md">
            <div class="close-btn">
                <a id="nav-close" class="nav-close">
                    <div class="line">
                        <span class="line1"></span>
                        <span class="line2"></span>
                    </div>
                </a>
            </div>
            <div class="rs-offcanvas-inner">
                <div class="canvas-logo">
                    <a href="{{ route('home') }}">
                        <img src="images/Logo.png" alt="logo"></a>
                </div>
                <div class="offcanvas-text">
                    <p>Suspendisse interdum consectetur libero id. Fermentum leo vel orci porta non. Euismod
                        viverra nibh cras pulvinar suspen.</p>
                </div>
                <div class="canvas-contact rs-contact contact-style2 contact-modfiy5">
                    <div class="content-wrap">
                        <h2 class="widget-title">Kritik dan Saran</h2>
                        <form id="contact-form" method="post" action="mailer.php">
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-12 mb-30">
                                        <label>Name</label>
                                        <input class="from-control" type="text" id="name" name="name"
                                            placeholder="Enter Your name" required="">
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        <label>Email</label>
                                        <input class="from-control" type="text" id="email" name="email"
                                            placeholder="Enter your email address" required="">
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        <label> How can we help you?</label>
                                        <textarea class="from-control" id="message" name="message" placeholder="Type your messags here" required=""></textarea>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <div class="form-group mb-0">
                                        <p class="submit-btn submit-stle2">
                                            <input type="submit" value="Submit Now">
                                        </p>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>

                    {{-- <h2 class="widget-title">Get In Touch</h2>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="fi fi-rr-envelope-plus"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Email</h4>
                                <em><a href="mailto:support@devsdesign.net">support@devsdesign.net</a></em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="fi fi-rr-phone-call"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Phone</h4>
                                <em><a href="tel:(00)45611227890">(00) 456 1122 7890</a></em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="fi fi-rr-map-marker-home"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Location</h4>
                                <em>Riverside 255, San Francisco, USA</em>
                            </div>
                        </div> --}}
                </div>
            </div>
        </nav>
        <!-- Canvas Menu end -->

        <!-- Canvas Mobile Menu start -->
        <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
            <div class="close-btn">
                <a id="nav-close2" class="nav-close">
                    <div class="line">
                        <span class="line1"></span>
                        <span class="line2"></span>
                    </div>
                </a>
            </div>
            <ul class="nav-menu">
                <li class="{{ request()->is('/') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="{{ request()->is('about') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li class="{{ request()->is('member') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('member') }}">Member</a>
                </li>
                <li class="{{ request()->is('posts') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('posts') }}">Blog</a>
                </li>
                {{-- <li class="{{ request()->is('sponsor') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('sponsor') }}">Sponsor</a>
                </li> --}}
                <li class="{{ request()->is('events') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('events') }}">Event</a>
                </li>
            </ul> <!-- //.nav-menu -->
            <!-- //.nav-menu -->

            <!-- //.nav-menu -->
        </nav>
        <!-- Canvas Menu end -->
    </header>
    <!--Header End-->
</div>
<!--Full width header End-->
