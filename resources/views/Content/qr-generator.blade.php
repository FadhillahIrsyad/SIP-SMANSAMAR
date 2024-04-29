@extends('Layout.layout')

@section('content')

@include('Component.sidebar')

@include('Component.header')

<section>
    <div class="qr-container">
        <div class="content">
            <div class="col-sm-12" id="qr-content">
                {{-- bikin jadi ditengah --}}
                <div class="row">
                    <div class="col-md-6">
                        {{-- <div class="qr-image" >
                            <img src="../assets/qr-sample.png" alt="qr">
                        </div> --}}
                        {{$qr_generated}}
                    </div>
                    {{-- Ini nggak usah ada --}}
                    {{-- <div class="col-md-6">
                        <div class="qr-description" >
                            <form action="#">
                                <div class="box">
                                    <input type="text" name="" id="" placeholder="" disabled> 
                                </div>
                                <div class="box">
                                    <input type="text" name="" id="" placeholder="" disabled>
                                </div>
                                <div class="box">
                                    <input type="text" name="" id="" placeholder="" disabled>
                                </div>
                                <div class="box">
                                    <input type="text" name="" id="" placeholder="" disabled>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>