@extends('Layout.layout')

@section('content')

@include('Component.sidebar')

@include('Component.header')

<section>
    <div class="table-container">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Penugasan</h3>
            </div>

            <div class="card-body">
                <div id="table-penugasan_wrapper" class="dataTables_wrapper">
                    {{-- <div class="input-group">
                        <button type="button" class="btn btn-default float-right" id="daterange-btn">
                            <i class="far fa-calendar-alt"></i> Date range picker
                            <i class="fas fa-caret-down"></i>
                        </button>
                    </div> --}}
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="table-penugasan" class="table table-bordered table-striped dataTable dtr-inline"
                                aria-describedby="table-penugasan_info">
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
                                            colspan="1" aria-label="Username: activate to sort column ascending">
                                            NIP/NISN</th>
                                        <th class="sorting" tabindex="0" aria-controls="table-tamu" rowspan="1"
                                            colspan="1" aria-label="Role: activate to sort column ascending">
                                            Role</th>
                                        <th tabindex="0" aria-controls="table-tamu" rowspan="1" colspan="1"
                                            aria-label="Action: activate to sort column ascending">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penugasan as $p)
                                        <tr>
                                            {{-- <td class="dtr-control sorting_1" tabindex="0">1</td> --}}
                                            <td class="">{{$p->name}}</td>
                                            <td>{{$p->nip_nisn}}</td>
                                            <td>{{$p->role}}</td>
                                            <td>
                                                <div class="table-action-button">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div id="table-action-wrapper">
                                                                <div class="edit">
                                                                    <a href="{{'/edit-data-login/'.$p->id}}"><i class='bx bxs-edit'></i></a>
                                                                </div>
                                                                <div class="remove">
                                                                    <a href="{{route('Delete Data User', ['user'=>$p])}}"><i class='bx bx-trash-alt'
                                                                        onclick="event.preventDefault();
                                                                        document.getElementById('l-delete-form-{{$p->id}}').submit();"></i></a>
                                                                        <form id="l-delete-form-{{$p->id}}" action="{{route('Delete Data User',['user'=>$p])}}" style="display: none" method="post">
                                                                            {{ csrf_field() }}
                                                                        </form>
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