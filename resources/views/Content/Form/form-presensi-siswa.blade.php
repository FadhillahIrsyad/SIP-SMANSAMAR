@extends('Layout.layout')

@section('content')

@include('Component.sidebar')

@include('Component.header')

<section>
    <div class="form-container">
        <div class="content-box">
            <div class="form-box">
                <form action="/api/s-post-data" method="POST">
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
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 id="form-subtitle">Status Kehadiran</h5>
                                    <div class="form-group custom">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <div class="radio-container">
                                                            <label class="radio-label">
                                                                <input class="" type="radio" name="status-kehadiran"
                                                                    value="SK01">
                                                                Terlambat
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <div class="radio-container">
                                                            <label class="radio-label">
                                                                <input class="" type="radio" name="status-kehadiran"
                                                                    value="SK02">
                                                                Izin
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <div class="radio-container">
                                                            <label class="radio-label">
                                                                <input class="" type="radio" name="status-kehadiran"
                                                                    value="SK03">
                                                                Dispensasi
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 id="form-subtitle">Status Pelanggaran</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group custom">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <div class="check-container">
                                                            <label class="check-label">
                                                                <input class="" type="checkbox" name="status-kehadiran"
                                                                    value="Atasan Seragam">
                                                                Atasan Seragam
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <div class="check-container">
                                                            <label class="check-label">
                                                                <input class="" type="checkbox" name="status-kehadiran"
                                                                    value="Bahawan Seragam">
                                                                Bawahan Seragam
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <div class="check-container">
                                                            <label class="check-label">
                                                                <input class="" type="checkbox" name="status-kehadiran"
                                                                    value="Kaus Kaki">
                                                                Kaus Kaki
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <div class="check-container">
                                                            <label class="check-label">
                                                                <input class="" type="checkbox" name="status-kehadiran"
                                                                    value="Sepatu">
                                                                Sepatu
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <div class="check-container">
                                                            <label class="check-label">
                                                                <input class="" type="checkbox" name="status-kehadiran"
                                                                    value="Rambut">
                                                                Rambut
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <div class="check-container">
                                                            <label class="check-label">
                                                                <input class="" type="checkbox" name="status-kehadiran"
                                                                    value="Aksesoris">
                                                                Aksesoris
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-check">
                                                        <div class="check-container">
                                                            <label class="check-label">
                                                                <input class="" type="checkbox" name="status-kehadiran"
                                                                    value="Lain-lain">
                                                                Lain-lain
                                                            </label>
                                                            <div class="user-box" id="unique">
                                                                <input type="text" name="email" id="other" placeholder="Type">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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