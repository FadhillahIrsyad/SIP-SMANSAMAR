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
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="ID: activate to sort column descending">
                                            ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="NIS: activate to sort column ascending">
                                            NIS</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Nama: activate to sort column ascending">
                                            Nama</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Kelas: activate to sort column ascending">
                                            Kelas</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Tanggal: activate to sort column ascending">
                                            Tanggal</th>
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
                                    @foreach ($siswa as $s)
                                    <tr>
                                        <td class="dtr-control sorting_1" tabindex="0">{{$s->id}}</td>
                                        <td class="">{{$s->nisn}}</td>
                                        <td>{{$s->nama}}</td>
                                        <td>{{$s->kelas}}</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>Dewi</td>
                                        <td></td>
                                        <td>
                                            <div class="table-action-button">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6" id="table-action-button">
                                                                <div class="edit">
                                                                    <a href="{{url('/api/edit-data-siswa',$s->id) }}"><i class='bx bxs-edit'></i></a>
                                                                </div>
                                                            </div>
                                                            <form action="{{url('/api/s-delete-data',$s->id)}}" method="post">
                                                                {{ csrf_field() }}
                                                                {{method_field('delete')}}
                                                                <div class="col-md-6"  id="table-action-button">
                                                                    <div class="remove">
                                                                        <button type="submit">
                                                                            <a href="#" type="submit"><i class='bx bx-trash-alt'></i></a>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
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