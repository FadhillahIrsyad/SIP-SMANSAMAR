<?php

namespace App\Http\Controllers;

use App\Models\PresensiSiswa;
use App\Models\Siswa;
use App\Models\Tamu;
use Illuminate\Http\Request;

class ControllerDashboard extends Controller
{
    //
    public function getData(){
        $data['cs'] = Siswa::count();
        $data['ct'] = Tamu::select()->where('nama','Fadhillah')->count();
        $data['cps'] = PresensiSiswa::count();

        return view('Content.dashboard',$data);
    }
}
