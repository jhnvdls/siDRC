@extends('layouts.frontend.master')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1">
        <div class="container">
            <div class="breadcrumbs-inner">
                <div class="row y-middle">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img class="js-tilt" src="{{ asset('images/about.png') }}" alt="Images">
                        </div>
                    </div>
                    <div class="col-lg-6" style="padding: 100px">
                        <div class="breadcrumbs-wrap">
                            <h3 class="page-title">
                                Tentang Del Robotic Club
                            </h2>
                            <p class="description">Del Robotics Club adalah sebuah klub atau kelompok yang berfokus pada pengembangan dan eksplorasi dalam bidang robotika. Del Robotic Club berdiri pada tahun 2009 . Yang menjadi latar belakang berdirinya klub robotik ini yaitu  proyek akhir  mahasiswa Politeknik Informatika Del angkatan 2009. Untuk mengembangkan proyek akhir tersebut  dibentuklah Del Robotic Club pada tahun 2009 yang masih terbentuk hingga saat ini.</p>
                        </div>
                    </div>
                </div>
                <div class="shape-animation">
                    <div class="ball-animate">
                        <img class="scale" src="{{ asset('frontend/images/breadcrumbs/shape/img1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->



    <!-- Services Section Start -->
    @foreach ($setting as $item)

        <div class="rs-services services-style5 black-bg2 pt-125 pb-130 md-pt-75 md-pb-80">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-xl-6 col-md-6 xl-mb-30">
                        <div class="services-item">
                            <div class="services-wrap" style="height: 400px">
                                <div class="services-img">
                                    <img src="{{asset('images/'. $item->visi_logo)}}" alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">VISI</h2>
                                    <p class="services-txt">{{$item->visi}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 xl-mb-30">
                        <div class="services-item">
                            <div class="services-wrap" style="height: 400px">
                                <div class="services-img">
                                    <img src="{{asset('images/'. $item->misi_logo)}}" alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">Misi</h2>
                                    <ul class="services-txt">
                                        <li>{{$item->misi}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="container p-5 mt-5">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="text-light text-center">
                            <h1 class="text-light">Prestasi</h1>
                            <p class="fw-bold fst-italic">Prestasi yang pernah didapatkan oleh tim Del Robotic Club semenjak klub ini didirikan pada tahun 2009. Prestasi yang pernah didapatkan bukan hanya dari regional ataupun Nasional, namun telah sampai hingga jenjang Internasional.</p>
                        </div>
                    </div>
                </div>
                
                <div class="p-5">
                    <div class="card bg-transparent border-end-0 border-start-0 border-bottom-0 border-5 border-white py-3">
                        <div class="row">
                            <div class="col-md-5">
                                <p class="text-light">September, 2022 - November, 2022</p>
                            </div>
                            <div class="col-md-7">
                                <p class="fw-bold" style="color:yellow;">2nd Place Open Challenge</p>
                                <p style="color: rgb(211, 231, 229);">The Robot World Cup Initiative is an attempt to foster AI and intelligent robotic research by providing a standard problem, playing soccer, where wide range of technologies can be integrated and examined.</p>
                                <p class="fw-bold text-light">Robocup Asia Pacific</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-5">
                    <div class="card bg-transparent border-end-0 border-start-0 border-bottom-0 border-5 border-white py-3">
                        <div class="row">
                            <div class="col-md-5">
                                <p class="text-light">Agustus, 2020 - Oktober, 2020</p>
                            </div>
                            <div class="col-md-7">
                                <p class="fw-bold" style="color:yellow;">3rd Place Regional II</p>
                                <p style="color: rgb(211, 231, 229);">Kontes Robot Indonesia (KRI) adalah kegiatan kompetisi tahunan mahasiswa dalam bidang rancang bangun dan rekayasa robotika yang dapat diikuti oleh seluruh mahasiswa pada perguruan tinggi di  wilayah Republik Indonesia, dari berbagai K/L atau kedinasan, yang tercatat pada Pangkalan Data Pendidikan TInggi.</p>
                                <p class="fw-bold text-light">Indonesia Robotic Contest</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-5">
                    <div class="card bg-transparent border-end-0 border-start-0 border-bottom-0 border-5 border-white py-3">
                        <div class="row">
                            <div class="col-md-5">
                                <p class="text-light">Januari, 2019 - Juni, 2019</p>
                            </div>
                            <div class="col-md-7">
                                <p class="fw-bold" style="color:yellow;">1st Place National Scale</p>
                                <p style="color: rgb(211, 231, 229);">Kontes Robot Indonesia (KRI) adalah kegiatan kompetisi tahunan mahasiswa dalam bidang rancang bangun dan rekayasa robotika yang dapat diikuti oleh seluruh mahasiswa pada perguruan tinggi di  wilayah Republik Indonesia, dari berbagai K/L atau kedinasan, yang tercatat pada Pangkalan Data Pendidikan TInggi.</p>
                                <p class="fw-bold text-light">Indonesia Robotic Contest</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
    
    <!-- Services Section End -->

    <div class="rs-contact contact-style2 contact-modfiy5 pt-100 md-pt-80">
        <div class="container">
            <div class="sec-title2 text-center mb-55">
                <h2 class="title title4">
                    Kunjungi Kami!
                </h2>
            </div>
            <div style="overflow:hidden; position: relative; text-align: center; margin-bottom: 100px;">
                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="800" height="443" type="text/html" src="https://www.youtube.com/embed/mvhE6q_2axg"></iframe>
                <div style="position: absolute; bottom: 10px; left: 0; right: 0; margin-left: auto; margin-right: auto; color: #000; text-align: center;">
                    <div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">Generated by <a href="https://www.embedista.com/embed-youtube-video">Embed Youtube Video</a> online</div>
                    <script type="text/javascript" src="https://www.embedista.com/j/ytvideo.js"></script>
                </div>
            </div>
            <style>
                .newst {
                    position: relative;
                    text-align: center;
                    height: 420px;
                    width: 520px;
                    margin: 0 auto; /* Add this line to center the container */
                }
    
                #gmap_canvas img {
                    max-width: none!important;
                    background: none!important
                }
            </style>
        </div>
    </div>
    
    

        {{-- <!-- About Start -->
    <div class="rs-about about-style1 pt-150 pb-150 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-50">
                    <div class="sec-title">
                        <span class="sub-text primary-color">
                            About Swipy
                        </span>
                        <h2 class="title pb-35">
                            We create digital Ideas that are bigger, bolder, braver and better.
                        </h2>
                        <p class="desc pb-60 md-pb-40">
                            We create digital ideas that are bigger, bolder, braver and better. We believe in good ideas
                            flexibility and precission We’re world’s Our Special Team best consulting & finance solution
                            provider. Wide range of web and software development services.
                        </p>
                        <!-- Counter Start -->
                        <div class="rs-counter counter-style1 counter-modify4">
                            <div class="row">
                                <div class="col-lg-4 md-mb-30">
                                    <div class="rs-counter-list">
                                        <div class="count-text">
                                            <div class="count-number">
                                                <span class="rs-count">10</span>
                                                <span class="prefix">K+</span>
                                            </div>
                                            <span class="title">Year of experience</span>
                                        </div>
                                        <div class="separator-dot"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 md-mb-30">
                                    <div class="rs-counter-list">
                                        <div class="count-text">
                                            <div class="count-number">
                                                <span class="rs-count">234</span>
                                                <span class="prefix">K+</span>
                                            </div>
                                            <span class="title">Simply services views on</span>
                                        </div>
                                        <div class="separator-dot"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="rs-counter-list">
                                        <div class="count-text">
                                            <div class="count-number">
                                                <span class="rs-count">10</span>
                                                <span class="prefix">K+</span>
                                            </div>
                                            <span class="title">Get unique experience</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img2">
                        <img src="frontend/images/about/about-img2.png" alt="About">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End --> --}}
    @endsection
