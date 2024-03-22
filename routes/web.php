<?php

use App\Http\Controllers\ControllerPresensiSiswa;
use App\Http\Controllers\ControllerQRCode;
use App\Http\Controllers\ControllerSiswa;
use App\Http\Controllers\ControllerTamu;
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

Route::get('/form-tamu', function (){
    return view('Content.Form.form-tamu');
})->name('Form Tamu');

Route::get('/form-siswa', function(){
    return view('Content.Form.form-siswa');
});

Route::get('/siswa', function(){
    return view('Content.siswa');
})->name('Menu Siswa');

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
    Route::get('/data-siswa','getData')->name('Data Siswa');
    // to post the inserted data into the database
    Route::post('/s-post-data','postData');
    // to get specific data based on the given parameter 'id'
    Route::get('/edit-data-siswa/{id}','getExistingData');
    // to post updated details of data at the given id
    Route::post('/s-update-data/{id}','postUpdate');
    // to delete the data of the given id
    Route::post('/s-delete-data/{siswa}','deleteData')->name('Delete Data Siswa');
});

//Controller Presensi Siswa
Route::controller(ControllerPresensiSiswa::class)->group(function(){
    // to get data from database of presensi siswa
    Route::get('/presensi-siswa','getData')->name('Presensi Siswa');
    // to post the inserted data into the database
    Route::post('/ps-post-data','postData');
    // to get specific data based on the given parameter 'id'
    Route::get('/update-presensi-data/{id}','getExistingData')->name('Update Presensi Siswa');
    // to post updated details of data at the given id
    Route::post('/ps-post-update/{id}','postUpdate');
    // to delete the data of the given id
    Route::post('/ps-delete-data/{presensi_siswa}','deleteData')->name('Delete Data Presensi Siswa');
    // to route db required data to the form for add data
    Route::get('/form-presensi-siswa','addData');
    // functionality testing purposes
    Route::get('/testing','testing');
});

//Controller Tamu
Route::controller(ControllerTamu::class)->group(function(){
    // to get data from table tamu on database
    Route::get('/data-tamu','getData')->name('Data Tamu');
    // to post data into table tamu on database
    Route::post('/t-post-data','postData');
    // to get existing data by id from table tamu on databse
    Route::get('/update-data-tamu/{id}','getExistingData');
    // to post the updated details into table tamu on database
    Route::post('/t-post-update/{id}','postUpdate');
    // to delete the chosen data by id from table tamu on database
    Route::post('t-delete-data/{tamu}','deleteData')->name('Delete Data Tamu');
});

//Controller QR Code
Route::controller(ControllerQRCode::class)->group(function(){
    Route::get('/qr-get-data','getData');
});