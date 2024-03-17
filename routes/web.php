<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Content.login');
})->name('Login');

Route::get('/register', function (){
    return view('Content.register');
});

Route::get('/dashboard', function (){
    return view('Content.dashboard');
})->name('Dashboard');

Route::get('/data-siswa', function (){
    return view('Content.data-siswa');
})->name('Presensi Siswa');
Route::get('/data-tamu', function (){
    return view('Content.data-tamu');
})->name('Presensi Tamu');

Route::get('/form-presensi-siswa', function (){
    return view('Content.Form.form-presensi-siswa');
})->name('Form Presensi Siswa');

Route::get('/test',function(){
    return 'testing';
})->name('test');

