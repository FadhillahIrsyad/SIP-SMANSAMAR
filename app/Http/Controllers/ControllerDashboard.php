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
        $data['ct'] = Tamu::count();
        $data['cps'] = PresensiSiswa::where('status_pelanggaran','!=','Tidak Ada')->count();

        return view('Content.dashboard',$data);
    }
}
