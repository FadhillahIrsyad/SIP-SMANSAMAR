@extends('Layout.layout')

@section('content')

@include('Component.sidebar')

@include('Component.header')

<section>
    <div class="table-container">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Presensi</h3>
            </div>

            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        {{-- <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="ID: activate to sort column descending">
                                            ID</th> --}}
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="NIS: activate to sort column ascending">
                                            NIS</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Nama: activate to sort column ascending">
                                            Nama</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Kelas: activate to sort column ascending">
                                            Kelas</th>
                                        {{-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Tanggal: activate to sort column ascending">
                                            Tanggal</th> --}}
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1"
                                            aria-label="Status Kehadiran: activate to sort column ascending">
                                            Status Kehadiran</th>
                                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1"
                                            aria-label="Status Pelanggaran: activate to sort column ascending">
                                            Status Pelanggaran</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1"
                                            aria-label="Status Pelanggaran: activate to sort column ascending">
                                            Keterangan</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1"
                                            aria-label="Penanggung Jawab: activate to sort column ascending">
                                            Penanggung Jawab</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Approval: activate to sort column ascending">
                                            Approval</th>
                                        <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="Action: activate to sort column ascending">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($presensi_siswa as $ps)
                                    <tr>
                                        {{-- <td class="dtr-control sorting_1" tabindex="0">{{$ps->id}}</td> --}}
                                        <td class="">{{$ps->nisn}}</td>
                                        <td>{{$ps->nama}}</td>
                                        <td>{{$ps->kelas}}</td>
                                        <td>{{$ps->status_kehadiran}}</td>
                                        <td>{{$ps->status_pelanggaran}}</td>
                                        <td>{{$ps->keterangan}}</td>
                                        <td>Dewi</td>
                                        <td></td>
                                        <td>
                                            <div class="table-action-button">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="table-action-wrapper">
                                                            <div class="edit">
                                                                <a href="{{'/update-presensi-data/'.$ps->id}}"><i class='bx bxs-edit'></i></a>
                                                            </div>
                                                            <div class="remove">
                                                                <a href="{{ route('Delete Data Presensi Siswa', ['presensi_siswa'=>$ps]) }}"
                                                                    onclick="event.preventDefault();
                                                                    document.getElementById('ps-delete-form-{{$ps->id}}').submit();"><i class='bx bx-trash-alt'></i>
                                                                </a>
                                                                <form id="ps-delete-form-{{$ps->id}}" action="{{ route('Delete Data Presensi Siswa', ['presensi_siswa'=>$ps])}}" method="post"
                                                                    style="display:none">
                                                                    {{ csrf_field() }}
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>