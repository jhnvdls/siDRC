@extends('layouts.frontend.master')
<style>
    .img-cover{
        width: 100%; 
        height: 150px;
        object-fit : cover;
    }
</style>
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
                            <p class="description">"Kerja tim adalah kemampuan untuk bekerja sama menuju visi bersama. Kemampuan untuk mengarahkan pencapaian individu ke arah tujuan organisasi. Ini adalah bahan bakar yang memungkinkan orang biasa untuk mencapai hasil yang tidak biasa. " 
                                - Andrew Carnegie</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-img">
                            <img class="js-tilt" src="/images/hero 4.png" alt="Images">
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

  <!-- Chart Start -->
<div class="rs-chart chart-style1 pt-160 pb-160 md-pt-80 md-pb-75">
    <div class="container">
        <div class="sec-title2 text-center mb-55">
            <h2 class="title title4">
                Persentase Prodi Member DRC
            </h2>
        </div>
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="about-image-wrap">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                            var data = new google.visualization.DataTable();
                            data.addColumn('string', 'Prodi');
                            data.addColumn('number', 'Jumlah Member');
                            data.addRows({!! $chart_data !!});

                            var options = {
                                title: 'Range : Prodi to Members',
                                is3D: true,
                            };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                        chart.draw(data, options);
                    }
                    </script>
                    <div id="piechart" style="width: 900px; height: 500px;"></div>
                </div>
            </div>
            <div class="col-lg-6 pl-30 md-pl-15">
                <div class="sec-title">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Chart End -->

    <!-- Team Start -->
    <div class="rs-team team-style1 pt-100 pb-100 md-pt-80 md-pb-80">
        <div class="container">
            <div class="sec-title2 text-center mb-55">
                <h2 class="title title4">
                    Member DRC Periode 2023
                </h2>
            </div>
            <div class="row">
                @foreach ($members as $member)
                    <div class="col-xl-3 col-md-6 mb-30">
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="image-wrap">
                                    <a href="javascript:;"
                                        onclick="handle_open_modal('{{ route('member.show', $member->id) }}', '#customModal', 'GET')">
                                        <img src="{{ asset('images/members/' . $member->image) }}" alt="Images"
                                            style="" class="img-cover">
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
