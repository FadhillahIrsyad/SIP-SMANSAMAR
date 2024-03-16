@extends('Layout.layout')

@section('content')

@include('Component.sidebar')

@include('Component.header')

<section>
    <div class="form-container">
        <div class="content-box">
            <div class="form-box">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 id="form-subtitle">Data diri</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="user-box">
                                        <input type="text" name="email" id="email" required="" placeholder="">
                                        <label id="form-text">NIS</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="text" name="password" id="password" required="" placeholder="">
                                        <label id="form-text">Nama</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="user-box">
                                        <input type="text" name="email" id="email" required="" placeholder="">
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
                                                            <input class="" type="radio" name="status-kehadiran"
                                                                value="1">
                                                            <label class="radio-label">Terlambat</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <div class="radio-container">
                                                            <input class="" type="radio" name="status-kehadiran"
                                                                value="1">
                                                            <label class="radio-label">Izin</label>
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
                                                            <input class="" type="radio" name="status-kehadiran"
                                                                value="1">
                                                            <label class="radio-label">Dispensasi</label>
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
                                                            <input class="" type="checkbox" name="status-kehadiran"
                                                                value="1">
                                                            <label class="check-label">Atasan Seragam</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <div class="check-container">
                                                            <input class="" type="checkbox" name="status-kehadiran"
                                                                value="1">
                                                            <label class="check-label">Bawahan Seragam</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <div class="check-container">
                                                            <input class="" type="checkbox" name="status-kehadiran"
                                                                value="1">
                                                            <label class="check-label">Kaus Kaki</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <div class="check-container">
                                                            <input class="" type="checkbox" name="status-kehadiran"
                                                                value="1">
                                                            <label class="check-label">Sepatu</label>
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
                                                            <input class="" type="checkbox" name="status-kehadiran"
                                                                value="1">
                                                            <label class="check-label">Rambut</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check">
                                                        <div class="check-container">
                                                            <input class="" type="checkbox" name="status-kehadiran"
                                                                value="1">
                                                            <label class="check-label">Aksesoris</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-check">
                                                        <div class="check-container">
                                                            <input class="" type="checkbox" name="status-kehadiran"
                                                                value="1">
                                                            <label class="check-label">Lain-lain</label>
                                                            <div class="user-box" id="unique">
                                                                <input type="text" name="email" id="other" required="" placeholder="Type">
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