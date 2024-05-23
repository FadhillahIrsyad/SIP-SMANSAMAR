@extends('Layout.layout')

@section('content')

@include('Component.sidebar')

@include('Component.header')

<section>
    <div class="form-container">
        <div class="content-box">
            <div class="form-box">
                <form action="{{URL('/l-post-update',$user->id)}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 id="form-subtitle">Data diri</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="user-box">
                                        <input type="text" name="nip_nisn" id="nip_nisn" required="" placeholder="" value="{{$user->nip_nisn}}">
                                        <label id="form-text">NIP / NISN</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="text" name="name" id="name" required="" placeholder="" value="{{$user->name}}">
                                        <label id="form-text">Nama</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="text" name="password" id="password" required="" placeholder="">
                                        <label id="form-text">Password</label>
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
                                                <input class="" type="radio" name="role" id="role" value="Super Admin" {{($user->role=='Super Admin')? 'checked':''}}>
                                                Super Admin
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="radio-container">
                                            <label class="radio-label">
                                                <input class="" type="radio" name="role" id="role" value="Admin" {{($user->role=='Admin')? 'checked':''}}>
                                                Admin
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-check">
                                        <div class="radio-container">
                                            <label class="radio-label">
                                                <input class="" type="radio" name="role" id="role" value="User" {{($user->role=='User')? 'checked':''}}>
                                                User
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
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