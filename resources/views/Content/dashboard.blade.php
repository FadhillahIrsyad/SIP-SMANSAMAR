@extends('Layout.layout')

@section('content')

@include('Component.header')

@include('Component.sidebar')

<section>

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
                                <a>Jumlah Siswa</a>
                            </div>
                        </div>
                        <div class="counter">
                            <a>1802</a>
                        </div>
                        <div class="detail">
                            <a>Tahun lalu: 1702</a>
                            <div class="counter-detail increase">
                                <div class="icon">
                                    <i class='bx bx-caret-up'></i>
                                </div>
                                <div class="text-info">
                                    <a>100</a>
                                </div>
                            </div>
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
                                <a>Jumlah Tamu</a>
                            </div>
                        </div>
                        <div class="counter">
                            <a>172</a>
                        </div>
                        <div class="detail">
                            <a>Tahun lalu: 190</a>
                            <div class="counter-detail decrease">
                                <div class="icon">
                                    <i class='bx bx-caret-down'></i>
                                </div>
                                <div class="text-info">
                                    <a>18</a>
                                </div>
                            </div>
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
                            <a>10</a>
                        </div>
                        <div class="detail">
                            <a>Tahun lalu: 15</a>
                            <div class="counter-detail decrease">
                                <div class="icon">
                                    <i class='bx bx-caret-up'></i>
                                </div>
                                <div class="text-info">
                                    <a>5</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="dashboard-container-2">
        <div class="dashboard-content">
            <div class="chart-canvas">

            </div>
        </div>
    </div>
    <div class="dashboard-side-container">
        <div class="dashboard-content">

        </div>
    </div>

    
</section>