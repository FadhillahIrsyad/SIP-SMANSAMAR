<?php

use App\Http\Controllers\ControllerPresensiSiswa;
use App\Http\Controllers\ControllerSiswa;
use App\Http\Controllers\ControllerTipeIzin;
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

Route::get('/data-tamu', function (){
    return view('Content.data-tamu');
})->name('Presensi Tamu');

// Route::get('/data-siswa', function (){
//     return view('Content.data-siswa',['api/s-get-data']);
// })->name('Presensi Siswa');

// Route::get('/form-presensi-siswa', function (){
//     return view('Content.Form.form-presensi-siswa');
// })->name('Form Presensi Siswa');

Route::get('/test',function(){
    return 'testing';
})->name('test');

//Controller Siswa
Route::controller(ControllerSiswa::class)->group(function() {
    // to get data from database of siswa
    Route::get('/s-get-data','getData');
    // to post the inserted data into the database
    Route::post('/s-post-data','postData');
    // to get specific data based on the given parameter 'id'
    Route::get('/edit-data-siswa/{id}','getExistingData');
    // to post updated details of data at the given id
    Route::post('/s-post-update-data/{id}','postUpdate');
    // to delete the data of the given id
    Route::delete('/s-delete-data/{id}','deleteData');
});

//Controller Presensi Siswa
Route::controller(ControllerPresensiSiswa::class)->group(function(){
    // to get data from database of presensi siswa
    Route::get('/data-siswa','getData')->name('Presensi Siswa');
    // to post the inserted data into the database
    Route::post('/ps-post-data','postData');
    // to get specific data based on the given parameter 'id'
    Route::get('/ps-get-exist-data/{id}','getExistingData');
    // to post updated details of data at the given id
    Route::post('/ps-post-update/{id}','postUpdate');
    // to delete the data of the given id
    Route::delete('/ps-delete-data/{id}','deleteData');
});

//Controller Izin Siswa
Route::controller(ControllerTipeIzin::class)->group(function(){
    // to get data from database of izin siswa
    Route::get('/form-presensi-siswa','getData')->name('Form Presensi Siswa');
});