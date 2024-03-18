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
                    <h2>Welcome to SIPSMANSAMAR </h2>
                    <p>Please login to continue</p>
                    <form action="api/post-login" method="POST">
                        {{ csrf_field() }}
                        <div class="user-box">
                            <input type="email" name="email" id="email" required="" placeholder="">
                            <label id="form-text">Email</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="password" id="password" required="" placeholder="">
                            <label id="form-text">Password</label>
                        </div>
                        <a href="/test">Forgot Password?</a>
                        <button type="submit" class="btn-submit">Submit</button>
                    </form>
                </div>
            </div>

        </section>
        
    </div>
</div>