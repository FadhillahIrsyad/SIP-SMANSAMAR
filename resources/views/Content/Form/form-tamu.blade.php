@extends('Layout.layout')

@section('content')

@include('Component.sidebar')

@include('Component.header')

<section>
    <div class="form-container">
        <div class="content-box">
            <div class="form-box">
                <form action="#" method="POST">
                    {{-- {{ csrf_field() }} --}}
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 id="form-subtitle">Data diri</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="user-box">
                                        <input type="text" name="nama" id="nama" required="" placeholder="">
                                        <label id="form-text">Nama</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="text" name="kontak" id="kontak" required="" placeholder="">
                                        <label id="form-text">Kontak</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="text" name="keperluan" id="keperluan" required="" placeholder="">
                                        <label id="form-text">Keperluan</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="text" name="keterangan" id="keterangan" required="" placeholder="">
                                        <label id="form-text">Keterangan</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="text" name="penanggung-jawab" id="penanggung-jawab" required="" placeholder="">
                                        <label id="form-text">Penanggung Jawab</label>
                                    </div>
                                    <button type="submit" class="btn-submit">Submit</button>
                                </div>
                                <div class="col-md-6">
                                    <img src="../assets/undraw_profile_data_re_v81r.svg" alt="" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>