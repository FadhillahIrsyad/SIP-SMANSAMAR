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
                    <div class="input-group">
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
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="table-tamu"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="ID: activate to sort column descending">
                                            ID</th>
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
                                    <tr>
                                        <td class="dtr-control sorting_1" tabindex="0">1</td>
                                        <td class="">Agus Tinus Turnip</td>
                                        <td>08123456789</td>
                                        <td>January 12, 2024</td>
                                        <td>Wawancara</td>
                                        <td>Wawancara dengan Kepala Sekolah</td>
                                        <td>Dian</td>
                                        <td>
                                            <div class="table-action-button">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="table-action-wrapper">
                                                            <div class="edit">
                                                                <a href="#"><i class='bx bxs-edit'></i></a>
                                                            </div>
                                                            <div class="remove">
                                                                <a href="#"><i class='bx bx-trash-alt'></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="dtr-control sorting_1" tabindex="0">2</td>
                                        <td class="">Agus Tinus Turnip</td>
                                        <td>08123456789</td>
                                        <td>January 19, 2024</td>
                                        <td>Wawancara</td>
                                        <td>Wawancara dengan Kepala Sekolah</td>
                                        <td>Dian</td>
                                        <td>
                                            <div class="table-action-button">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="table-action-wrapper">
                                                            <div class="edit">
                                                                <a href="#"><i class='bx bxs-edit'></i></a>
                                                            </div>
                                                            <div class="remove">
                                                                <a href="#"><i class='bx bx-trash-alt'></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="dtr-control sorting_1" tabindex="0">3</td>
                                        <td class="">Agus Tinus Turnip</td>
                                        <td>08123456789</td>
                                        <td>February 1, 2024</td>
                                        <td>Wawancara</td>
                                        <td>Wawancara dengan Kepala Sekolah</td>
                                        <td>Dian</td>
                                        <td>
                                            <div class="table-action-button">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="table-action-wrapper">
                                                            <div class="edit">
                                                                <a href="#"><i class='bx bxs-edit'></i></a>
                                                            </div>
                                                            <div class="remove">
                                                                <a href="#"><i class='bx bx-trash-alt'></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="dtr-control sorting_1" tabindex="0">4</td>
                                        <td class="">Agus Tinus Turnip</td>
                                        <td>08123456789</td>
                                        <td>11-01-2024</td>
                                        <td>Wawancara</td>
                                        <td>Wawancara dengan Kepala Sekolah</td>
                                        <td>Dian</td>
                                        <td>
                                            <div class="table-action-button">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="table-action-wrapper">
                                                            <div class="edit">
                                                                <a href="#"><i class='bx bxs-edit'></i></a>
                                                            </div>
                                                            <div class="remove">
                                                                <a href="#"><i class='bx bx-trash-alt'></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="dtr-control sorting_1" tabindex="0">5</td>
                                        <td class="">Agus Tinus Turnip</td>
                                        <td>08123456789</td>
                                        <td>11-01-2024</td>
                                        <td>Wawancara</td>
                                        <td>Wawancara dengan Kepala Sekolah</td>
                                        <td>Dewi</td>
                                        <td>
                                            <div class="table-action-button">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="table-action-wrapper">
                                                            <div class="edit">
                                                                <a href="#"><i class='bx bxs-edit'></i></a>
                                                            </div>
                                                            <div class="remove">
                                                                <a href="#"><i class='bx bx-trash-alt'></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>