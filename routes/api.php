<?php

use App\Http\Controllers\ControllerAuth;
use App\Http\Controllers\ControllerRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Controller Login
Route::controller(ControllerAuth::class)->group(function () {
    // to post the login details that has been inputed
    Route::post('/post-login','postLogin');
    // to post the details of an account that wants to be registered
    Route::post('/post-register','postRegister'); 
    // to post the request of logging out
    Route::get('/post-logout','postLogout');
});

Route::middleware(['auth'] )->group(function () {
    Route::get('/dashboard', function () {
        return view('Content.dashboard');
    });
});
