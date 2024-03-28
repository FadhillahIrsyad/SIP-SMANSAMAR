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
                    <h2>Register User </h2>
                    <p>....</p>
                    <form action="/post-register" method="POST">
                        {{ csrf_field() }}
                        <div class="user-box">
                            <input type="text" name="nama" id="nama" required="" placeholder="">
                            <label>Nama</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="nip_nisn" id="nip_nisn" required="" placeholder="">
                            <label>NIP/NISN</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="password" id="password" required="" placeholder="">
                            <label>Password</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="id_role" id="id_role">
                            <label>Role</label>
                        </div>
                        <a href="/test">Forgot Password?</a>
                        <button type="submit" class="btn-submit">Submit</button>
                    </form>
                </div>
            </div>

        </section>
        
    </div>
</div>