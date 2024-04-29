@extends('Layout.layout')

@section('content')

@include('Component.sidebar')

@include('Component.header')

<section>
    <section>
        <div class="qr-container">
            <div class="content">
                <div class="col-sm-12" id="qr-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="qr-image" >
                                <img src="" alt="profile-img">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="qr-description" id="qr-scanned">
                                <form action="#">
                                    <div class="box">
                                        <label id="form-text">Nama</label>
                                        <input type="text" name="nama" id="nama" required="" placeholder="" value="{{$presensi_siswa->nama}}" disabled>
                                    </div>
                                    <div class="box">
                                        <label id="form-text">Kelas</label>
                                        <input type="text" name="kelas" id="kelas" required="" placeholder="" value="{{$presensi_siswa->kelas}}" disabled>
                                    </div>
                                    <div class="box">
                                        <label id="form-text">NISN</label>
                                        <input type="text" name="nisn" id="nisn" required="" placeholder="" value="{{$presensi_siswa->nisn}}" disabled>
                                    </div>
                                    <div class="box">
                                        <label id="form-text">Status Kehadiran</label>
                                        <input type="text" name="status_kehadiran" id="status_kehadiran" required="" placeholder="" value="{{$presensi_siswa->status_kehadiran}}" disabled>
                                    </div>
                                    <div class="box">
                                        <label id="form-text">Status Pelanggaran</label>
                                        <input type="text" name="status_pelanggaran" id="status_pelanggaran" required="" placeholder="" value="{{$presensi_siswa->status_pelanggaran}}" disabled>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>