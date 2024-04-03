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
                                        <input type="text" name="nisn" id="nisn" required="" placeholder="" disabled>
                                    </div>
                                    <div class="box">
                                        <label id="form-text">...</label>
                                        <input type="text" name="nisn" id="nisn" required="" placeholder="" disabled>
                                    </div>
                                    <div class="box">
                                        <label id="form-text">...</label>
                                        <input type="text" name="nisn" id="nisn" required="" placeholder="" disabled>
                                    </div>
                                    <div class="box">
                                        <label id="form-text">...</label>
                                        <input type="text" name="nisn" id="nisn" required="" placeholder="" disabled>
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