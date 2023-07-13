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
                            <li><a class="readon started" href="https://forms.gle/uTyW9M9YsNsGrxF36" target="_blank">Join Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="main-img text-right md-text-center">
                        <img src="{{ asset('images/hero 1.png') }}" alt="Images">
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
                        <p style="margin-top: 30px" class="desc">
                            Robotika adalah satu cabang teknologi yang berhubungan dengan desain, konstruksi, operasi,
                            disposisi struktural, pembuatan, dan aplikasi dari robot. Robotika terkait dengan ilmu
                            pengetahuan bidang elektronika, mesin, mekanika, dan perangkat lunak komputer.
                        </p>
                        <!-- Counter End -->
                        <div class="btn-part mt-46">
                            <!-- <a class="readon started" href="/about" target="_blank">Pelajari Selengkapnya</a>  -->
                        <a class="readon leran" target="_blank" href="https://kontesrobotindonesia.id/index.html">Pelajari Selengkapnya</a>
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
    <div class="pricing-container rs-pricing-container pricing-style1 bg4 pt-153 pb-80 md-pt-75 md-pb-80">
        <div class="sec-title text-center mb-55 md-mb-35">
            <h2 class="title">
                KONTES ROBOT INDONESIA
            </h2>
        </div>
        <div class="container">
            <!-- pils -->
            <ul class="nav nav-pills justify-content-center">
            <ul class="nav nav-pills justify-content-center">
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
                                                <img src="{{ asset('images/KRSBI.png') }}" alt="About">
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
                                                <img src="{{ asset('images/tab KRPAI.png') }}" alt="About">
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
                                                <img src="{{ asset('images/tab_KRBAI.png') }}" alt="About">
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
                                                <img src="{{ asset('images/tab KRTMI.png') }}" alt="About">
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
                        <div class="rs-about about-style1 pt-160 pb-60 md-pt-80 md-pb-30">
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
    			    
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img4">
    <div class="container">
        <div class="breadcrumbs-inner">
            <div class="row y-middle">
                <div class="col-lg-7">
                    <div class="breadcrumbs-wrap mb-48 md-mb-0">
                        <h2 class="page-title">
                            DRC IT DEL Sponsorship
                        </h2>
                        <p class="description">Dalam mewujudkan cita-cita dan harapan kami untuk mengembangkan UKM Del Robotics Club, kami didukung oleh beberapa pihak atau entitas yang memberikan dukungan finansial, materi atau layanan. Kami memperoleh dana dengan mengajukan proposal secara resmi ketika hendak mengikuti Kontes Robot Indonesia.</p>
                    </div>
                    <div class="row">
                        <!-- Images -->
                        <div class="col-lg-3 col-md-6 mb-40">
                            <div class="card">
                                <div class="services-item">
                                    <div class="services-wrap">
                                        <div class="services-img">
                                            <img src="{{ asset('images/tpl.png') }}" alt="Images" data-bs-toggle="modal" data-bs-target="#tplModal">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-40">
                            <div class="card">
                                <div class="services-item">
                                    <div class="services-wrap">
                                        <div class="services-img">
                                            <img src="{{ asset('images/inalum.png') }}" alt="Images" data-bs-toggle="modal" data-bs-target="#inalumModal">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-40">
                            <div class="card">
                                <div class="services-item">
                                    <div class="services-wrap">
                                        <div class="services-img">
                                            <img src="{{ asset('images/hutahaean.png') }}" alt="Images" data-bs-toggle="modal" data-bs-target="#hutahaeanModal">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="{{ asset('images/Rectangle-10.png') }}" alt="Images">
                    </div>
                </div>
            </div>
            <div class="shape-animation">
                <div class="dot-animate">
                    <img class="scale" src="{{ asset('images/img2.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- TPL Modal -->
<div class="modal fade" id="tplModal" tabindex="-1" role="dialog" aria-labelledby="tplModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img style="width: 100%" id="modal-img-tpl" src="{{ asset('images/tpl.png') }}" alt="Modal Image">
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <h4 style="font-weight: bold" class="modal-title" id="tplModalLabel">Toba Pulp Lestari</h4>
                <p style="margin-block-start: 30px">Toba Pulp Lestari adalah perusahaan penggilingan kertas asal Indonesia berdiri di Provinsi Sumatra Utara, Indonesia, pada tahun 1989 dan dimiliki oleh pengusaha asal Indonesia, Sukanto Tanoto. Pada awal mula berdirinya perusahaan ini bernama Inti Indorayon Utama dan memiliki kode saham INRU.</p>
            </div>
            <div class="modal-footer">
                <button style="background-color: crimson" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Inalum Modal -->
<div class="modal fade" id="inalumModal" tabindex="-1" role="dialog" aria-labelledby="inalumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img style="width: 100%" id="modal-img-inalum" src="{{ asset('images/inalum.png') }}" alt="Modal Image" width="100%">
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <h4 style="font-weight: bold" class="modal-title" id="inalumModalLabel">Indonesia Asahan Aluminium (Inalum)</h4>
                <p style="margin-block-start: 30px">PT Indonesia Asahan Aluminium atau biasa disingkat menjadi Inalum, adalah bagian dari MIND ID yang bergerak di bidang produksi aluminium. Hingga akhir tahun 2021, perusahaan ini adalah satu-satunya produsen aluminium di Indonesia, dengan kapasitas produksi mencapai 250.000 ton per tahun.</p>
            </div>
            <div class="modal-footer">
                <button style="background-color: crimson" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Hutahaean Modal -->
<div class="modal fade" id="hutahaeanModal" tabindex="-1" role="dialog" aria-labelledby="hutahaeanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img style="width: 100%" id="modal-img-hutahaean" src="{{ asset('images/hutahaean.png') }}" alt="Modal Image" width="100%">
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>            
            <div class="modal-body">
                <h4 style="font-weight: bold" class="modal-title" id="hutahaeanModalLabel">Hutahaean Group</h4>
                <p style="margin-block-start: 30px">Hutahaean Group adalah salah satu perusahaan perkebunan kelapa sawit hulu yang paling berpengalaman dan mapan di Provinsi Riau. Perusahaan ini memiliki lebih dari 30 tahun pengalaman industri perkebunan dan pengalaman pengelolaan perkebunan kelapa sawit. PT. Group Hutahaean terkonsentrasi di Proyek Perkebunan Kelapa Sawit, Pabrik Pengolahan Karet dan Kelapa Sawit. Kapasitas 60 TPH dan unit pengolahan limbah. Perkebunan ini terletak di Kabupaten Dalu-Dalu Tambusai Rokan Hulu Provinsi Riau.</p>
            </div>
            <div class="modal-footer">
                <button style="background-color: crimson" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-header img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .card {
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .services-img {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .services-img img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modals = document.querySelectorAll('.modal');

        modals.forEach(function(modal) {
            modal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var imgSrc = button.querySelector('img').getAttribute('src');
                var modalImg = modal.querySelector('.modal-header img');
                modalImg.setAttribute('src', imgSrc);
            });
        });
    });

</script>


    <!-- Testimonial Section Start -->
			<div id="rs-testimonial" class="rs-testimonial testimonial-style2 testimonial-modify1 testi-yellow-modify1 pt-120 pb-120 md-pt-60 md-pb-75">
			    <div class="container custom"> 
			    	<div class="sec-title2 text-center mb-55">
			    		<h2 class="title title4">
			    			Apa Kata Alumni Kami?
			    		</h2>
			    	</div>
			        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
			            <div class="testimonial-item">
			                <div class="testi-content">
			                    <div class="image-wrap">
			                    	<img src="images/testimonidrc1.jpeg" alt="Testimonial">
			                    </div>
			                    <div class="testi-information">
			                    	<div class="testi-name">Irvan Saragi</div>
			                    	<span class="testi-title">iOS Developer, Apple Developer Academy</span>
			                    </div>
			                </div>
			                <div class="item-content-basic">
			                	<span>
			                		<img class="normal-img" src="frontend/images/testimonial/style1/linkedin.png" alt="Testimonial">
			                		<a href="https://www.linkedin.com/in/irvan-saragi-771004128/" target="_blank">
			                		<img class="hover-logo" src="frontend/images/testimonial/style1/linkedin2.png" alt="Testimonial">
                                </a>
			                	</span>
			                	<p>Selama saya bergabung dalam Del Robotics Club, saya dapat memperdalam ilmu elektronika dan robotika. Koneksi saya semakin luas dan saya terbiasa untuk hidup kompetitif dan mampu bekerja dalam tim.</p>
			                </div>
			            </div>
			            <div class="testimonial-item">
			                <div class="testi-content">
			                    <div class="image-wrap">
			                    	<img src="images/testimonidrc2.jpeg" alt="Testimonial">
			                    </div>
			                    <div class="testi-information">
			                    	<div class="testi-name">Andi Pranata</div>
			                    	<span class="testi-title">QA Engineer, Telkom Indonesia</span>
			                    </div>
			                </div>
			                <div class="item-content-basic">
			                	<span>
                                
                                <img class="normal-img" src="frontend/images/testimonial/style1/linkedin.png" alt="Testimonial">
			                		<a href="https://www.linkedin.com/in/andi-pranata/" target="_blank">
			                		<img class="hover-logo" src="frontend/images/testimonial/style1/linkedin2.png" alt="Testimonial">
                                </a>
			                	</span>
                                    <p>Melalui Del Robotics Club saya saya mampu mengasah skill saya mulai dari tidak tahu apa-apa hingga mampu ikut lomba di kancah regional dan nasional. Saya bisa berkolaborasi dengan mahasiswa dari prodi lain dan mampu bekerja dengan baik dalam tim.</p>
                            </div>
			            </div>
			            <div class="testimonial-item">
			                <div class="testi-content">
			                    <div class="image-wrap">
			                    	<img src="images/testimonidrc3.jpeg" alt="Testimonial">
			                    </div>
			                    <div class="testi-information">
			                    	<div class="testi-name">Surya Silalahi</div>
			                    	<span class="testi-title">IT Specialist at Bank Central Asia</span>
			                    </div>
			                </div>
			                <div class="item-content-basic">
			                	<span>
			                		<img class="normal-img" src="frontend/images/testimonial/style1/linkedin.png" alt="Testimonial">
			                		<a href="https://www.linkedin.com/in/surya-silalahi/" target="_blank">
			                		<img class="hover-logo" src="frontend/images/testimonial/style1/linkedin2.png" alt="Testimonial">
                                </a>
			                	</span>
                                    <p>Dalam UKM Del Robotics Club saya terlatih bekerja dalam tim, mampu bekerja di bawah tekanan dengan deadline yang padat, serta melatih sikap kepemimpinan saya.</p>
                            </div>
			            </div>
			            <div class="testimonial-item">
			                <div class="testi-content">
			                    <div class="image-wrap">
			                    	<img src="images/testimonidrc4.jpeg" alt="Testimonial">
			                    </div>
			                    <div class="testi-information">
			                    	<div class="testi-name">Sherina Purba</div>
			                    	<span class="testi-title">SAP Technical, PT. Agata Jonle Indonesia</span>
			                    </div>
			                </div>
			                <div class="item-content-basic">
			                	<span>
			                		<img class="normal-img" src="frontend/images/testimonial/style1/linkedin.png" alt="Testimonial">
			                		<a href="https://www.linkedin.com/in/sherinajp/" target="_blank">
			                		<img class="hover-logo" src="frontend/images/testimonial/style1/linkedin2.png" alt="Testimonial">
                                </a>
			                	</span>
                                    <p>Semenjak bergabung di Del Robotics Club saya menjadi pribadi yang gigih dalam belajar dan memiliki jiwa kompetitif yang tinggi. Saya terlatih untuk hidup disiplin dan mampu memanajemen waktu dengan baik.</p>
                            </div>
			            </div>
                    </div>
			    </div>
			<!-- Testimonial Section End -->

                {{-- map --}}
            <div class="rs-contact contact-style2 contact-modfiy5 pt-100 md-pt-80">
                <div class="container">
                    <div class="map-canvas pt-130 md-pt-80">
                        <div class="sec-title2 text-center mb-55">
                            <h2 class="title title4">
                                Temukan Kami
                            </h2>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3673457470372!2d99.14605787488244!3d2.3832151975961144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sInstitut%20Teknologi%20Del!5e0!3m2!1sid!2sid!4v1687533715892!5m2!1sid!2sid"
                            width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
    {{-- <!-- Testimonial Section Start -->
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
    </div> --}}

    <!-- Testimonial Section End -->
@endsection