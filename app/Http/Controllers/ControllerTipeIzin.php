<?php

namespace App\Http\Controllers;

use App\Models\StatusKehadiran as sk;
use Illuminate\Http\Request;

class ControllerTipeIzin extends Controller
{
    //
    public function getData(){
        $data['status_kehadiran'] = sk::all();
        return view('Content.Form.form-presensi-siswa', $data);
    }
}
