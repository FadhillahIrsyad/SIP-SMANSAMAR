@extends('Layout.layout')

@section('content')

@include('Component.sidebar')

@include('Component.header')

<section>
    <div class="form-container">
        <div class="content-box">
            <div class="form-box">
                <form action="/ps-post-data" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 id="form-subtitle">Data diri</h5>
                            <div class="row">
                                <div class="col-md-6">                                 
                                    <div class="user-box">
                                        <h5 id="form-subtitle">Siswa</h5>
                                        <div class="dropdownSelector">
                                            <select name="nisn" id="nisn">
                                                <option selected disabled> Siswa</option>
                                                @foreach ($siswa as $s)                                            
                                                    <option value="{{$s->nisn}}">{{$s->nisn}} {{$s->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>                                             
                                </div>
                                <div class="col-md-6">
                                    <div class="user-box" style="display: none">
                                        <input type="text" name="penanggung_jawab" id="penanggung_jawab" required="" placeholder="" value="{{Auth::user()->name}}">
                                        <label id="form-text">Penanggung Jawab</label>
                                    </div>   
                                </div>                    
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <h5 id="form-subtitle">Status Kehadiran</h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="radio-container">
                                            <label class="radio-label">
                                                <input class="" type="radio" name="status_kehadiran" id="status_kehadiran" value="Hadir">
                                                Hadir
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="radio-container">
                                            <label class="radio-label">
                                                <input class="" type="radio" name="status_kehadiran" id="status_kehadiran" value="Izin">
                                                Izin
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="radio-container">
                                            <label class="radio-label">
                                                <input class="" type="radio" name="status_kehadiran" id="status_kehadiran" value="Terlambat">
                                                Terlambat
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="radio-container">
                                            <label class="radio-label">
                                                <input class="" type="radio" name="status_kehadiran" id="status_kehadiran" value="Dispensasi">
                                                Dispensasi
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="user-box">
                                        <input type="text" name="keterangan" id="keterangan" required="" placeholder="">
                                        <label id="form-text">Keterangan</label>
                                    </div>
                                      
                                </div>  
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <h5 id="form-subtitle">Status Pelanggaran</h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check" name='status_pelanggaran[]'>
                                        <div class="check-container">
                                            <label class="check-label">
                                                <input class="" type="checkbox" name="status_pelanggaran[]"
                                                    value="Atasan Seragam">
                                                Atasan Seragam
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="check-container">
                                            <label class="check-label">
                                                <input class="" type="checkbox" name="status_pelanggaran[]"
                                                    value="Bawahan Seragam">
                                                Bawahan Seragam
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="check-container">
                                            <label class="check-label">
                                                <input class="" type="checkbox" name="status_pelanggaran[]"
                                                    value="Kaus Kaki">
                                                Kaus Kaki
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="check-container">
                                            <label class="check-label">
                                                <input class="" type="checkbox" name="status_pelanggaran[]" value="Sepatu">
                                                Sepatu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="check-container">
                                            <label class="check-label">
                                                <input class="" type="checkbox" name="status_pelanggaran[]" value="Rambut">
                                                Rambut
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="check-container">
                                            <label class="check-label">
                                                <input class="" type="checkbox" name="status_pelanggaran[]"
                                                    value="Aksesoris">
                                                Aksesoris
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="check-container">
                                            <label class="check-label">
                                                <input class="" type="checkbox" name="status_pelanggaran[]"
                                                    value="Tidak Ada">
                                                Tidak Ada
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="check-container hidden" id="other">
                                            <div class="user-box unique">
                                                <input type="text" name="other" placeholder="Type">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <h5 id="form-subtitle">Persetujuan</h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="radio-container">
                                            <label class="radio-label">
                                                <input class="" type="radio" name="persetujuan" id="persetujuan" value="Diizinkan">
                                                Diizinkan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="radio-container">
                                            <label class="radio-label">
                                                <input class="" type="radio" name="persetujuan" id="persetujuan" value="Tidak Diizinkan">
                                                Tidak Diizinkan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="radio-container">
                                            <label class="radio-label">
                                                <input class="" type="radio" name="persetujuan" id="persetujuan" value="Belum Diperiksa"> 
                                                Belum Diperiksa
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            {{-- <div class="col-md-6"></div> --}}
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