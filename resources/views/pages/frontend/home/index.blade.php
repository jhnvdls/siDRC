@extends('layouts.frontend.master')
@section('content')
    <!-- Banner Start -->
    <div class="rs-banner banner-main-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="content-wrap">
                        <h1 class="title"><span style="color: #2192FF">
                                We Make It Easy with
                            </span> <span style="color: #2F327D">Robot</span></h1>
                        <div class="description">
                            <p style="font-size: 22px">
                                “A robot may not injure a human being, or, through inaction, allow human being to come to
                                harm”
                            </p>
                        </div>
                        <ul class="banner-bottom">
                            <li><a class="readon started" href="javascript:;">Explore</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="main-img text-right md-text-center">
                        <img src="{{ asset('images/Group-122.png') }}" alt="Images">
                        {{-- <div class="main-img-bg1">
                            <img src="" alt="Images">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="banner-animate">
            <img class="animation-style one scale" src="frontend/images/banner/main-home/hero-shpae-min.png" alt="Images">
            <img class="animation-style two rotated-style" src="frontend/images/banner/main-home/shape1.png" alt="Images">
            <img class="animation-style three veritcal" src="frontend/images/banner/main-home/shape2.png" alt="Images">
            <img class="animation-style four spine" src="frontend/images/banner/main-home/shape3.png" alt="Images">
            <img class="animation-style five veritcal" src="frontend/images/banner/main-home/shape4.png" alt="Images">
            <img class="animation-style six veritcal" src="frontend/images/banner/main-home/shape5.png" alt="Images">
            <img class="animation-style seven rotated-style" src="frontend/images/banner/main-home/shape6.png"
                alt="Images">
            <img class="animation-style eight scale" src="frontend/images/banner/main-home/dot1.png" alt="Images">
            <img class="animation-style nine scale" src="frontend/images/banner/main-home/dot2.png" alt="Images">
            <img class="animation-style ten scale" src="frontend/images/banner/main-home/dot2.png" alt="Images">
        </div> --}}
    </div>
    <!-- Banner End -->

    <!-- About Start -->
    <div class="rs-about about-style1 pt-160 pb-160 md-pt-80 md-pb-75">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-50">
                    <div class="about-image-wrap">
                        <div class="images-part">
                            <img src="{{ asset('images/Group-106.png') }}" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-30 md-pl-15">
                    <div class="sec-title">
                        <h2 class="title">
                            Apa itu, Robotika?
                        </h2>
                        <p class="desc">
                            Robotika adalah satu cabang teknologi yang berhubungan dengan desain, konstruksi, operasi,
                            disposisi struktural, pembuatan, dan aplikasi dari robot. Robotika terkait dengan ilmu
                            pengetahuan bidang elektronika, mesin, mekanika, dan perangkat lunak komputer.
                        </p>
                        <!-- Counter End -->
                        <div class="btn-part mt-46">
                            <a class="readon leran" href="about.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-animation">
            <div class="animate one">
                <img src="frontend/images/about/style1/dot1.png" alt="About">
            </div>
            <div class="animate two">
                <img src="frontend/images/about/style1/dot2.png" alt="About">
            </div>
            <div class="animate three">
                <img src="frontend/images/about/style1/dot3.png" alt="About">
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Pricing Start -->
    <div class="pricing-container rs-pricing-container pricing-style1 bg4 pt-153 pb-160 md-pt-75 md-pb-80">
        <div class="sec-title text-center mb-55 md-mb-35">
            <h2 class="title">
                KONTES ROBOT INDONESIA
            </h2>
        </div>
        <div class="container">
            <!-- pils -->
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="#kbsrib" class="nav-link active" data-bs-toggle="pill">KRSBI beroda</a>
                </li>
                <li class="nav-item">
                    <a href="#krpai" class="nav-link" data-bs-toggle="pill">KRPAI</a>
                </li>
                <li class="nav-item">
                    <a href="#krbai" class="nav-link" data-bs-toggle="pill">KRBAI</a>
                </li>
                <li class="nav-item">
                    <a href="#krsti" class="nav-link" data-bs-toggle="pill">KRSTI</a>
                </li>
                <li class="nav-item">
                    <a href="#krtmi" class="nav-link" data-bs-toggle="pill">KRTMI</a>
                </li>
                <li class="nav-item">
                    <a href="#kbsrih" class="nav-link" data-bs-toggle="pill">KRSBI humanoid</a>
                </li>
            </ul>
            <ul class="bounce-invert">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="kbsrib">
                        <div class="rs-about about-style1 pt-160 pb-160 md-pt-80 md-pb-75">
                            <div class="container">
                                <div class="row y-middle">
                                    <div class="col-lg-6 md-mb-50">
                                        <div class="about-image-wrap">
                                            <div class="images-part">
                                                <img src="{{ asset('images/Group-368.png') }}" alt="About">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pl-30 md-pl-15">
                                        <div class="sec-title">
                                            <h2 class="title">
                                                KRSBI Beroda
                                            </h2>
                                            <p class="desc">
                                                Kontes Robot Sepak Bola Indonesia (KRSBI) Beroda mengacu pada divisi Middle
                                                Size League (MSL) RoboCup Soccer League. Tema KRSBI 2023 adalah “Sepak Bola
                                                Robot Menuju Liga Sepakbola Robot Tahun 2050”. Aturan kontes KRSBI
                                                mengadopsi MSL Rules and Regulation
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-animation">
                                <div class="animate one">
                                    <img src="frontend/images/about/style1/dot1.png" alt="About">
                                </div>
                                <div class="animate two">
                                    <img src="frontend/images/about/style1/dot2.png" alt="About">
                                </div>
                                <div class="animate three">
                                    <img src="frontend/images/about/style1/dot3.png" alt="About">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="krpai">
                        <div class="rs-about about-style1 pt-160 pb-160 md-pt-80 md-pb-75">
                            <div class="container">
                                <div class="row y-middle">
                                    <div class="col-lg-6 md-mb-50">
                                        <div class="about-image-wrap">
                                            <div class="images-part">
                                                <img src="{{ asset('images/Rectangle-1.png') }}" alt="About">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pl-30 md-pl-15">
                                        <div class="sec-title">
                                            <h2 class="title">
                                                KRPAI
                                            </h2>
                                            <p class="desc">
                                                Kontes Robot Pemadam Api Indonesia (KRPAI) 2019 mengacu pada Trinity College
                                                International Robot Contest (TCIRC). Suatu robot dengan penggerak kaki
                                                bekerja di lapangan yang mensimulasikan rumah. Misi pada KRPAI Daring 2020
                                                adalah penyemprotan disinfektan.
                                            </p>
                                            <!-- Counter End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-animation">
                                <div class="animate one">
                                    <img src="frontend/images/about/style1/dot1.png" alt="About">
                                </div>
                                <div class="animate two">
                                    <img src="frontend/images/about/style1/dot2.png" alt="About">
                                </div>
                                <div class="animate three">
                                    <img src="frontend/images/about/style1/dot3.png" alt="About">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="krbai">
                        <div class="rs-about about-style1 pt-160 pb-160 md-pt-80 md-pb-75">
                            <div class="container">
                                <div class="row y-middle">
                                    <div class="col-lg-6 md-mb-50">
                                        <div class="about-image-wrap">
                                            <div class="images-part">
                                                <img src="{{ asset('images/Rectangle-10.png') }}" alt="About">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pl-30 md-pl-15">
                                        <div class="sec-title">
                                            <h2 class="title">
                                                KRBAI
                                            </h2>
                                            <p class="desc">
                                                Kontes Robot Bawah Air Indonesia (KRBAI) adalah divisi baru yang pertama
                                                kali diadakan pada KRI 2023. KRBAI 2023 menekankan pada kompetisi
                                                pengembangan teknologi dan desain inovasi robot otonom bawah air. Tim
                                                peserta mengusulkan karya desain inovasi yang dikompetisikan pada KRBAI
                                                2023.
                                            </p>
                                            <!-- Counter End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-animation">
                                <div class="animate one">
                                    <img src="frontend/images/about/style1/dot1.png" alt="About">
                                </div>
                                <div class="animate two">
                                    <img src="frontend/images/about/style1/dot2.png" alt="About">
                                </div>
                                <div class="animate three">
                                    <img src="frontend/images/about/style1/dot3.png" alt="About">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="krsti">
                        <div class="rs-about about-style1 pt-160 pb-160 md-pt-80 md-pb-75">
                            <div class="container">
                                <div class="row y-middle">
                                    <div class="col-lg-6 md-mb-50">
                                        <div class="about-image-wrap">
                                            <div class="images-part">
                                                <img src="{{ asset('images/Rectangle-9.png') }}" alt="About">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pl-30 md-pl-15">
                                        <div class="sec-title">
                                            <h2 class="title">
                                                KRSTI
                                            </h2>
                                            <p class="desc">
                                                Kontes Robot Seni Tari Indonesia (KRSTI) menampilkan robot humanoid yang
                                                dapat menari berdasarkan gerakan seni tari dan budaya bangsa di Indonesia.
                                                Robot menari dengan diiringi musik melakukan gerakan wajib sesuai dengan
                                                tema “Robot Penari Kalimantan Timur”
                                            </p>
                                            <!-- Counter End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-animation">
                                <div class="animate one">
                                    <img src="frontend/images/about/style1/dot1.png" alt="About">
                                </div>
                                <div class="animate two">
                                    <img src="frontend/images/about/style1/dot2.png" alt="About">
                                </div>
                                <div class="animate three">
                                    <img src="frontend/images/about/style1/dot3.png" alt="About">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="krtmi">
                        <div class="rs-about about-style1 pt-160 pb-160 md-pt-80 md-pb-75">
                            <div class="container">
                                <div class="row y-middle">
                                    <div class="col-lg-6 md-mb-50">
                                        <div class="about-image-wrap">
                                            <div class="images-part">
                                                <img src="{{ asset('images/Rectangle-8.png') }}" alt="About">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pl-30 md-pl-15">
                                        <div class="sec-title">
                                            <h2 class="title">
                                                KRTMI
                                            </h2>
                                            <p class="desc">
                                                Kontes Robot Tematik Indonesia (KRTMI) adalah divisi baru yang diperkenalkan
                                                pada KRI 2019. KRTMI Daring 2020 mengambil tema sesuai dengan kebutuhan
                                                nasional, untuk ketahanan bangsa akibat dampak pandemi Covid-19. KRTMI 2020
                                                mengambil tema Robot Kesehatan , yaitu robot pengangkat pasien. Kompetisi
                                                ini mengubah tema seetiap tahunnya.
                                            </p>
                                            <!-- Counter End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-animation">
                                <div class="animate one">
                                    <img src="frontend/images/about/style1/dot1.png" alt="About">
                                </div>
                                <div class="animate two">
                                    <img src="frontend/images/about/style1/dot2.png" alt="About">
                                </div>
                                <div class="animate three">
                                    <img src="frontend/images/about/style1/dot3.png" alt="About">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kbsrih">
                        <div class="rs-about about-style1 pt-160 pb-160 md-pt-80 md-pb-75">
                            <div class="container">
                                <div class="row y-middle">
                                    <div class="col-lg-6 md-mb-50">
                                        <div class="about-image-wrap">
                                            <div class="images-part">
                                                <img src="{{ asset('images/Ellipse-119.png') }}" alt="About">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pl-30 md-pl-15">
                                        <div class="sec-title">
                                            <h2 class="title">
                                                KRSBI Humanoid
                                            </h2>
                                            <p class="desc">
                                                Kontes Robot Sepak Bola Indonesia (KRSBI) Humanoid mengacu pada divisi
                                                KidSize RoboCup Soccer Humanoid League. Tema KRSBI 2023 adalah “Menggali
                                                Kecerdasan Robot Humanoid Pemain Sepak Bola untuk Meningkatkan Kemaslahatan
                                                Kehidupan Manusia”.
                                            </p>
                                            <!-- Counter End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-animation">
                                <div class="animate one">
                                    <img src="frontend/images/about/style1/dot1.png" alt="About">
                                </div>
                                <div class="animate two">
                                    <img src="frontend/images/about/style1/dot2.png" alt="About">
                                </div>
                                <div class="animate three">
                                    <img src="frontend/images/about/style1/dot3.png" alt="About">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <!-- Pricing End -->

    <!-- Testimonial Section Start -->
    <div id="rs-testimonial" class="rs-testimonial testimonial-style1 pt-153 pb-100 md-pt-80 md-pb-50">
        <!-- Partner Start -->
        <div class="rs-partner partner-main-home pt-20">
            <div class="container custom">
                <div class="slider partner-slide-1">
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="javascript:;">
                                <img class="hovers-logos rs-grid-img" src="{{ asset('images/java.png') }}" title=""
                                    alt="">
                                <img class="mains-logos rs-grid-img " src="{{ asset('images/java.png') }}" title=""
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="javascript:;">
                                <img class="hovers-logos rs-grid-img" src="{{ asset('images/sw.png') }}" title=""
                                    alt="">
                                <img class="mains-logos rs-grid-img " src="{{ asset('images/sw.png') }}" title=""
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="javascript:;">
                                <img class="hovers-logos rs-grid-img" src="{{ asset('images/rasp.png') }}"
                                    title="" alt="">
                                <img class="mains-logos rs-grid-img " src="{{ asset('images/rasp.png') }}"
                                    title="" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="javascript:;">
                                <img class="hovers-logos rs-grid-img" src="{{ asset('images/bat.png') }}" title=""
                                    alt="">
                                <img class="mains-logos rs-grid-img " src="{{ asset('images/bat.png') }}" title=""
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="javascript:;">
                                <img class="hovers-logos rs-grid-img" src="{{ asset('images/python.png') }}"
                                    title="" alt="">
                                <img class="mains-logos rs-grid-img " src="{{ asset('images/python.png') }}"
                                    title="" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner End -->
    </div>
    <!-- Testimonial Section End -->
@endsection
