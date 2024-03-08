@extends('Layout.layout')

@section('content')

@include('Component.header')

@include('Component.sidebar')

<section>

    <div class="dashboard-container-1">
        <div class="dashboard-content">
            <div class="counter-card">
                <div class="card-content">
                    <div class="counter">
                        <div class="icon">
                            <i class='bx bxs-group'></i>
                        </div>
                        <div class="text-counter">
                            <p>999.999</p> {{-- Ganti jadi dinamis --}}
                            <a href="#">Siswa</a>
                        </div>
                    </div>
                    <hr>
                    <div class="info">
                        <a href="#">></a>
                    </div>
                </div>
            </div>
            <div class="counter-card">
                <div class="card-content">
                    <div class="counter">
                        <div class="icon">
                            <i class='bx bx-group'></i>
                        </div>
                        <div class="text-counter">
                            <p>999.999</p> {{-- Ganti jadi dinamis --}}
                            <a href="#">Tamu</a>
                        </div>
                    </div>
                    <hr>
                    <div class="info">
                        <a href="#">></a>
                    </div>
                </div>
            </div>
            <div class="counter-card">
                <div class="card-content">
                    <div class="counter">
                        <div class="icon">
                            <i class='bx bxs-error-circle'></i>
                        </div>
                        <div class="text-counter">
                            <p>999.999</p> {{-- Ganti jadi dinamis --}}
                            <a href="#">Pelanggaran</a>
                        </div>
                    </div>
                    <hr>
                    <div class="info" onclick="#">
                        <a href="#">></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-container-2">
        <div class="dashboard-content">
            <canvas id="lineChart"></canvas>
        </div>
    </div>
    <div class="dashboard-side-container">
        <div class="dashboard-content">
            
        </div>
    </div>

</section>