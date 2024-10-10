@extends('Layout.layout')

@section('content')

@include('Component.sidebar')

@include('Component.header')

<section>
    <div class="table-container">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Siswa</h3>
            </div>
           
            <div class="card-body">
                <div id="siswa_table_wrapper" class="dataTables_wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="siswa_table" class="table table-bordered table-striped dataTable dtr-inline"
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
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Kontak: activate to sort column ascending">
                                            Kontak Orang Tua</th>
                                        {{-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Kelas: activate to sort column ascending">
                                            Pembuat</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Kelas: activate to sort column ascending">
                                            Perubah</th> --}}
                                        <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="Action: activate to sort column ascending">
                                            Action</th>
                                            
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $s)
                                        <tr>
                                            {{-- <td class="dtr-control sorting_1" tabindex="0">{{$s->id}}</td> --}}
                                            <td class="">{{$s->nisn}}</td>
                                            <td>{{$s->nama}}</td>
                                            <td>{{$s->kelas}}</td>
                                            <td>{{$s->no_hp_ortu}}</td>
                                            {{-- <td>{{$s->created_by}}</td>
                                            <td>{{$s->updated_by}}</td> --}}
                                            <td>
                                                <div class="table-action-button">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div id="table-action-wrapper">
                                                                <div class="edit">
                                                                    <a href="{{'/edit-data-siswa/'.$s->id}}"><i class='bx bxs-edit'></i></a>
                                                                </div>
                                                                <div class="remove">
                                                                    <a href="{{route('Delete Data Siswa', ['siswa'=>$s])}}"><i class='bx bx-trash-alt'
                                                                        onclick="event.preventDefault();
                                                                                document.getElementById('s-delete-form-{{$s->id}}').submit();"></i></a>
                                                                    <form id="s-delete-form-{{$s->id}}" action="{{route('Delete Data Siswa',['siswa'=>$s])}}" style="display: none" method="post">
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

    <div class="popup-container hidden" id="import-popup" >
        <div class="overlay" onclick="closePopUp()"></div>
        <div class="popup">
            <h2>Import Data</h2>
            <form action="/s-post-csv" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <button type="submit" class="input-group-text">Upload</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="hint">
                <p>
                    ini ceritanya tutor format csv
                    <br>
                    ----------------------
                    <br>
                    ini gambar
                </p>
            </div>
        </div>
    </div>


</section>