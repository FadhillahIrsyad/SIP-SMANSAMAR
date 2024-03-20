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
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate molestiae facilis quasi temporibus magni dolor voluptas repellat? Ea, voluptatibus aut odit culpa reiciendis earum ipsa, quos aspernatur fugiat laborum porro.</p>
                            <a href="/data-siswa" class="btn btn-primary" id="menu-button">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" id="menu-card">
                        <img class="card-img-top" src="../assets/undraw_profile_data_re_v81r.svg" alt="Card image cap" id="menu-image">
                        <div class="card-body">
                            <h5 class="card-title">Presensi Siswa</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="/presensi-siswa" class="btn btn-primary" id="menu-button">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>