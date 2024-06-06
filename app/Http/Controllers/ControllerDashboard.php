<?php

namespace App\Http\Controllers;

use App\Models\PresensiSiswa;
use App\Models\Siswa;
use App\Models\Tamu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ControllerDashboard extends Controller
{
    //
    public function getData(){
        $data['cs'] = Siswa::count();
        // total of tamu
        $data['ct'] = Tamu::count();
        // total of tamu today
        $data['ctt'] = Tamu::where('tanggal','=',Carbon::now()->toDateString())->count();
        // total of siswa who does not have pelanggaran
        $data['cps'] = PresensiSiswa::where('status_pelanggaran','!=','Tidak Ada')->where('tanggal','=',Carbon::now()->toDateString())->count();
        // total of siswa overall
        $data['cpst'] = PresensiSiswa::where('status_pelanggaran','!=','Tidak Ada')->count();

        return view('Content.dashboard',$data);
    }
}
