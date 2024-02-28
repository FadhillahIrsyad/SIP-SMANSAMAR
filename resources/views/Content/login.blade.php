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
                    <h2>Welcome to SIPSMANSAMAR</h2>
                    <p>Please login to continue</p>
                    <form action="post-login" method="POST">
                        <div class="user-box">
                            <input type="text" name="" required="">
                            <label>Username</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="" required="">
                            <label>Password</label>
                        </div>
                        <a href="#">Forgot Password?</a>
                        <button class="btn-submit" name="login">Submit</button>
                    </form>
                </div>
            </div>

        </section>
        
    </div>
</div>