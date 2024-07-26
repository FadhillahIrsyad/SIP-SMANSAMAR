@extends('Layout.layout')

@section('content')

@include('Component.header')

@include('Component.sidebar')

<section id="dashboard">

    <div class="dashboard-container-1">
        <div class="container-fluid">
            <div class="container-content">

                <div class="counter-card">
                    <div class="card-content">
                        <div class="info">
                            <div class="icon siswa">
                                <i class='bx bxs-user'></i>
                            </div>
                            <div class="text-info">
                                <a>Izin</a>
                            </div>
                        </div>                        
                        <div class="counter">
                            <a id="counterIzinSiswa">{{$cist}}</a>
                        </div>
                        <div class="detail">
                            <a>Total: {{$cis}}</a>                            
                        </div>
                    </div>
                </div>

                <div class="counter-card">
                    <div class="card-content">
                        <div class="info">
                            <div class="icon tamu">
                                <i class='bx bxs-user'></i>
                            </div>
                            <div class="text-info">
                                <a>Terlambat</a>
                            </div>
                        </div>
                        <div class="counter">
                            <a id="counterTerlambatSiswa">{{$ctst}}</a>
                        </div>
                        <div class="detail">
                            <a>Total: {{$cts}}</a>
                        </div>
                    </div>
                </div>

                <div class="counter-card">
                    <div class="card-content">
                        <div class="info">
                            <div class="icon pelanggaran">
                                <i class='bx bxs-user'></i>
                            </div>
                            <div class="text-info">
                                <a>Pelanggaran</a>
                            </div>
                        </div>
                        <div class="counter">
                            <a id="counterPelanggaranSiswa">{{$cpst}}</a>
                        </div>
                        <div class="detail">
                            <a>Total: {{$cps}}</a>                            
                        </div>
                    </div>
                </div>

                <div class="counter-card">
                    <div class="card-content">
                        <div class="info">
                            <div class="icon pelanggaran">
                                <i class='bx bxs-user'></i>
                            </div>
                            <div class="text-info">
                                <a>Tamu</a>
                            </div>
                        </div>
                        <div class="counter">
                            <a id="counterTamu">{{$ctt}}</a>
                        </div>
                        <div class="detail">
                            <a>Total: {{$ct}}</a>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-container-2">
        <div class="dashboard-content">
            <div class="card left">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class='bx bxs-bar-chart-alt-2'></i>
                        Overview Total
                    </h3>
                </div>
                <div class="card-body">
                    <div class="tab-content p-0">
                        <div class="chart tab-pane active" id="overview-chart" style="position: relative;">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="overview-chart-canvas" height="600"
                                style="height: 300px; display: block; width: 871px;" width="1742"
                                class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card right">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class='bx bxs-pie-chart-alt-2'></i>
                        Overview: {{$today}}
                    </h3>
                </div>
                <div class="card-body">
                    <div class="tab-content p-0">
                        <div class="chart tab-pane active" id="overview2-chart" style="position: relative;">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="sales-chart-canvas" height="600"
                                style="height: 300px; display: block; width: 791px;" width="1582"
                                class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="dashboard-side-container">
        <div class="dashboard-content">
            <div class="app-list">
                <div class="app">
                    <a href="form-siswa"><i class='bx bxs-user-plus' style="color: #0A7AFF;"></i></a>
                    <div class="app-text">
                        <a>Add Siswa</a>
                    </div>
                </div>
                <div class="app">
                    <a href="form-tamu"><i class='bx bxs-bookmark-alt-plus' style="color: #3C885F;"></i></a>
                    <div class="app-text">
                        <a>Add Tamu</a>
                    </div>
                </div>
                <div class="app">
                    <a href="form-presensi-siswa"><i class='bx bxs-user-plus' style="color: #E43E3E;"></i></a>
                    <div class="app-text">
                        <a>Add Pelanggaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>

<script>

</script>

@endsection