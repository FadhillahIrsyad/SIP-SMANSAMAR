@extends('Layout.layout')

@section('content')

@include('Component.sidebar')

@include('Component.header')

<section>
    <div class="page-menu">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="card" id="menu-card">
                        <img class="card-img-top" src="../assets/undraw_personal_info_re_ur1n.svg" alt="Card image cap" id="menu-image">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Siswa</h5>
                            <p class="card-text">Pilih opsi ini untuk melihat dan memasukan data siswa yang terdaftar di dalam SMAN 1 MARGAHAYU</p>
                            <a href="/data-siswa" class="btn btn-primary" id="menu-button">Pilih</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" id="menu-card">
                        <img class="card-img-top" src="../assets/undraw_profile_data_re_v81r.svg" alt="Card image cap" id="menu-image">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Presensi Siswa</h5>
                            <p class="card-text">Pilih opsi ini untuk melihat dan memasukan data presensi serta pelanggaran yang telah dilakukan oleh siswa siswa SMAN 1 MARGAHAYU</p>
                            <a href="/presensi-siswa" class="btn btn-primary" id="menu-button">Pilih</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>