@extends('Layout.layout')

@section('content')

@include('Component.sidebar')

@include('Component.header')

<section>
    <div class="form-container">
        <div class="content-box">
            <div class="form-box">
                <form action="/s-post-data" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 id="form-subtitle">Data diri</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="user-box">
                                        <input type="text" name="nisn" id="nisn" required="" placeholder="">
                                        <label id="form-text">NISN</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="text" name="nama" id="nama" required="" placeholder="">
                                        <label id="form-text">Nama</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="user-box">
                                        <input type="text" name="kelas" id="kelas" required="" placeholder="">
                                        <label id="form-text">Kelas</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="text" name="kontak" id="kontak" required="" placeholder="">
                                        <label id="form-text">Kontak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn-submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>