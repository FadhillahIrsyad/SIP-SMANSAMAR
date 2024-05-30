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
                <div id="table-tamu_wrapper" class="dataTables_wrapper">
                    <div class="input-group" style="display: none">
                        <button type="button" class="btn btn-default float-right" id="daterange-btn">
                            <i class="far fa-calendar-alt"></i> Date range picker
                            <i class="fas fa-caret-down"></i>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="table-tamu" class="table table-bordered table-striped dataTable dtr-inline"
                                aria-describedby="table-tamu_info">
                                <thead>
                                    <tr>
                                        {{-- <th class="sorting sorting_asc" tabindex="0" aria-controls="table-tamu"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="ID: activate to sort column descending">
                                            ID</th> --}}
                                        <th class="sorting" tabindex="0" aria-controls="table-tamu" rowspan="1"
                                            colspan="1" aria-label="Nama: activate to sort column ascending">
                                            Nama</th>
                                        <th class="sorting" tabindex="0" aria-controls="table-tamu" rowspan="1"
                                            colspan="1" aria-label="No Handphone: activate to sort column ascending">
                                            No Handphone</th>
                                        <th class="sorting" tabindex="0" aria-controls="table-tamu" rowspan="1"
                                            colspan="1" aria-label="Tanggal: activate to sort column ascending">
                                            Tanggal</th>
                                        <th class="sorting" tabindex="0" aria-controls="table-tamu" rowspan="1"
                                            colspan="1" aria-label="Keperluan: activate to sort column ascending">
                                            Keperluan</th>
                                        <th class="sorting" tabindex="0" aria-controls="table-tamu" rowspan="1"
                                            colspan="1" aria-label="Keterangan: activate to sort column ascending">
                                            Keterangan</th>
                                        <th class="sorting" tabindex="0" aria-controls="table-tamu" rowspan="1"
                                            colspan="1"
                                            aria-label="Penanggung Jawab: activate to sort column ascending">
                                            Penanggung Jawab</th>
                                        <th tabindex="0" aria-controls="table-tamu" rowspan="1" colspan="1"
                                            aria-label="Action: activate to sort column ascending">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tamu as $t)
                                    <tr>
                                        {{-- <td cla s="dtr-control sorting_1" tabindex="0">1</td> --}}
                                        <td class="">{{$t->nama}}</td>
                                        <td>{{$t->no_hp}}</td>
                                        <td>{{$t->created_at}}
                                        <td>{{$t->keperluan}}</td>
                                        <td>{{$t->keterangan}}</td>
                                        <td>{{$t->penanggung_jawab}}</td>
                                        <td>
                                            <div class="table-action-button">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="table-action-wrapper">
                                                            <div class="edit">
                                                                <a href="{{'/update-data-tamu/'.$t->id}}"><i class='bx bxs-edit'></i></a>
                                                            </div>
                                                            <div class="remove">
                                                                <a href="{{ route('Delete Data Tamu',['tamu'=>$t])}}" onclick="event.preventDefault();
                                                                    document.getElementById('t-delete-form-{{$t->id}}').submit();"><i class='bx bx-trash-alt'></i>
                                                                <form action="{{ route('Delete Data Tamu',['tamu'=>$t])}}" method="post" style="display: none" id="t-delete-form-{{$t->id}}">
                                                                    {{ csrf_field() }}
                                                                </form>
                                                                </a>
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