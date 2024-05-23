@extends('Layout.layout')

@section('content')

<div class="section">
    <div class="content-container">
    
        <section class="login-section">
            <div class="img-box">
                <img src="../assets/undraw_unlock_re_a558.svg" alt="">
            </div>

            <div class="content-box">
                <div class="form-box">
                    <h2 id="register">Register User </h2>

                    <form action="/post-register" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="user-box">
                                            <input type="text" name="name" id="name" required="" placeholder="">
                                            <label id="form-text">Name</label>
                                        </div>
                                        <div class="user-box">
                                            <input type="text" name="nip_nisn" id="nip_nisn" required="" placeholder="">
                                            <label id="form-text">NIP/NIS</label>
                                        </div>
                                        <div class="user-box">
                                            <input type="text" name="password" id="password" required="" placeholder="">
                                            <label id="form-text">Password</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <h5 id="form-subtitle">Role</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-check">
                                            <div class="radio-container">
                                                <label class="radio-label">
                                                    <input class="" type="radio" name="role" id="role" value="Super Admin">
                                                    Super Admin
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-check">
                                            <div class="radio-container">
                                                <label class="radio-label">
                                                    <input class="" type="radio" name="role" id="role" value="Admin">
                                                    Admin
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-check">
                                            <div class="radio-container">
                                                <label class="radio-label">
                                                    <input class="" type="radio" name="role" id="role" value="User">
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
                                {{-- <div class="col-md-6"></div> --}}
                                <div class="col-md-6">
                                    <button type="submit" class="btn-submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>
        
    </div>
</div>