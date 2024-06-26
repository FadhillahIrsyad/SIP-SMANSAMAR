<?php

use App\Http\Controllers\ControllerAuth;
use App\Http\Controllers\ControllerPresensiSiswa;
use App\Http\Controllers\ControllerSiswa;
use App\Http\Controllers\ControllerTipeIzin;
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

Route::middleware(['auth'] )->group(function () {
    Route::get('/dashboard', function () {
        return view('Content.dashboard');
    });
});
