<?php

use App\Http\Controllers\ControllerAuth;
use App\Http\Controllers\ControllerPresensiSiswa;
use App\Http\Controllers\ControllerSiswa;
use App\Http\Controllers\ControllerTamu;
use Illuminate\Support\Facades\Route;

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
    return view('Content.Form.form-register');
})->middleware(['super admin']);

Route::get('/dashboard', function (){
    return view('Content.dashboard');
})->name('Dashboard')->middleware(['super admin']);

Route::get('/data-tamu', function (){
    return view('Content.data-tamu');
})->name('Presensi Tamu')->middleware(['super admin']);

Route::get('/form-tamu', function (){
    return view('Content.Form.form-tamu');
})->name('Form Tamu')->middleware(['super admin']);

Route::get('/form-siswa', function(){
    return view('Content.Form.form-siswa');
})->name('Form Siswa')->middleware(['super admin']);

Route::get('/siswa', function(){
    return view('Content.siswa');
})->name('Menu Siswa')->middleware(['super admin']);

Route::get('/test',function(){
    return 'testing';
})->name('Test')->middleware(['super admin']);

//Controller Login
Route::controller(ControllerAuth::class)->group(function () {
    // to post the login details that has been inputed
    Route::post('/post-login','postLogin');
    // to post the details of an account that wants to be registered
    Route::post('/post-register','postRegister');
    // to getspesific data based on the given parameter 'id'
    Route::get('/edit-data-login/{id}','getUpdate')->name('Update User')->middleware(['super admin']); 
    // to post the request of logging out
    Route::get('/post-logout','postLogout');
    // to post the updated details of an account
    Route::post('/l-post-update/{id}','postUpdate');
    // to post delete request of certain id
    Route::post('/l-delete-data/{user}','postDelete')->name('Delete User')->middleware(['super admin']);
    // to get data into penugasan view
    Route::get('/penugasan','getData')->name('Penugasan')->middleware(['super admin']);
});

//Controller Siswa
Route::controller(ControllerSiswa::class)->group(function() {
    // to get data from database of siswa
    Route::get('/data-siswa','getData')->name('Siswa')->middleware(['super admin']);
    // to post the inserted data into the database
    Route::post('/s-post-data','postData');
    // to get specific data based on the given parameter 'id'
    Route::get('/edit-data-siswa/{id}','getExistingData')->name('Update Siswa');
    // to post updated details of data at the given id
    Route::post('/s-update-data/{id}','postUpdate');
    // to delete the data of the given id
    Route::post('/s-delete-data/{siswa}','deleteData')->name('Delete Siswa');
    // to import data using csv
    Route::post('/s-post-csv','importCsv');
});

//Controller Presensi Siswa
Route::controller(ControllerPresensiSiswa::class)->group(function(){
    // to get data from database of presensi siswa
    Route::get('/presensi-siswa','getData')->name('Presensi Siswa');
    // to post the inserted data into the database
    Route::post('/ps-post-data','postData');
    // to get specific data based on the given parameter 'id'
    Route::get('/update-presensi-data/{id}','getExistingData')->name('Update Presensi Siswa')->middleware(['super admin']);
    // to post updated details of data at the given id
    Route::post('/ps-post-update/{id}','postUpdate');
    // to delete the data of the given id
    Route::post('/ps-delete-data/{presensi_siswa}','deleteData')->name('Delete Data Presensi Siswa')->middleware(['super admin']);
    // to route db required data to the form for add data
    Route::get('/form-presensi-siswa','addData');
    // to import data using csv
    Route::post('/ps-post-csv','importCsv');
    // functionality testing purposes
    Route::get('/testing','testing');
});

//Controller Tamu
Route::controller(ControllerTamu::class)->group(function(){
    // to get data from table tamu on database
    Route::get('/data-tamu','getData')->name('Data Tamu')->middleware(['super admin']);
    // to post data into table tamu on database
    Route::post('/t-post-data','postData');
    // to get existing data by id from table tamu on databse
    Route::get('/update-data-tamu/{id}','getExistingData')->name('Update Tamu')->middleware(['super admin']);
    // to post the updated details into table tamu on database
    Route::post('/t-post-update/{id}','postUpdate');
    // to delete the chosen data by id from table tamu on database
    Route::post('t-delete-data/{tamu}','deleteData')->name('Delete Tamu')->middleware(['super admin']);
});
