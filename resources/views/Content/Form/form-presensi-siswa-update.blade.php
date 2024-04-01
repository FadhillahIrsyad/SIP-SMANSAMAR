@extends('Layout.layout')

@section('content')

@include('Component.sidebar')

@include('Component.header')

<section>
    <div class="form-container">
        <div class="content-box">
            <div class="form-box">
                <form action="{{URL('/ps-post-update',$presensi_siswa->id)}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 id="form-subtitle">Data diri</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="user-box">
                                        <input type="text" name="nisn" id="nisn" required="" placeholder="" value="{{$presensi_siswa->nisn}}">
                                        <label id="form-text">NISN</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="text" name="nama" id="nama" required="" placeholder="" value="{{$presensi_siswa->nama}}">
                                        <label id="form-text">Nama</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="user-box">
                                        <input type="text" name="kelas" id="kelas" required="" placeholder="" value="{{$presensi_siswa->kelas}}">
                                        <label id="form-text">Kelas</label>
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
                                                <input class="" type="radio" name="status_kehadiran" id="status_kehadiran" value="Izin" {{($presensi_siswa->status_kehadiran=='Izin')? 'checked':''}}>
                                                Izin
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="radio-container">
                                            <label class="radio-label">
                                                <input class="" type="radio" name="status_kehadiran" id="status_kehadiran" value="Terlambat" {{($presensi_siswa->status_kehadiran=='Terlambat')? 'checked':''}}>
                                                Terlambat
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="radio-container">
                                            <label class="radio-label">
                                                <input class="" type="radio" name="status_kehadiran" id="status_kehadiran" value="Dispensasi" {{($presensi_siswa->status_kehadiran=='Dispensasi')? 'checked':''}}>
                                                Dispensasi
                                            </label>
                                        </div>
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
                                                    value="Atasan Seragam" {{ in_array('Atasan Seragam', $status_pelanggaran) ? 'checked':''}}>
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
                                                    value="Bawahan Seragam" {{ in_array('Bawahan Seragam', $status_pelanggaran) ? 'checked':''}}>
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
                                                    value="Kaus Kaki" {{ in_array('Kaus Kaki', $status_pelanggaran) ? 'checked':''}}>
                                                Kaus Kaki
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="check-container">
                                            <label class="check-label">
                                                <input class="" type="checkbox" name="status_pelanggaran[]" value="Sepatu" {{ in_array('Sepatu', $status_pelanggaran) ? 'checked':''}}>
                                                Sepatu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="check-container">
                                            <label class="check-label">
                                                <input class="" type="checkbox" name="status_pelanggaran[]" value="Rambut" {{ in_array('Rambut', $status_pelanggaran) ? 'checked':''}}> 
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
                                                    value="Aksesoris" {{ in_array('Aksesoris', $status_pelanggaran) ? 'checked':''}}>
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
                                                    value="Lain-lain" {{ in_array('Lain-lain', $status_pelanggaran) ? 'checked':''}}>
                                                Lain-lain
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