<?php

namespace App\Http\Controllers;

use App\Models\PresensiSiswa;
use App\Models\Tamu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ControllerDashboard extends Controller
{
    //
    public function getData(){
        // total of izin
        $data['cis'] = PresensiSiswa::where('status_kehadiran','=','Izin')->count();
        // total of izin today
        $data['cist'] = PresensiSiswa::where('status_kehadiran','=','Izin')->where('tanggal','=',Carbon::now()->toDateString())->count();
        // total of terlambat 
        $data['cts'] = PresensiSiswa::where('status_kehadiran','=','Terlambat')->count();
        // total of terlambat today 
        $data['ctst'] = PresensiSiswa::where('status_kehadiran','=','Terlambat')->where('tanggal','=',Carbon::now()->toDateString())->count();
        // total of pelanggaran
        $data['cps'] = PresensiSiswa::where('status_pelanggaran','!=','Tidak Ada')->count();
        // total of pelanggaran today
        $data['cpst'] = PresensiSiswa::where('status_pelanggaran','!=','Tidak Ada')->where('tanggal','=',Carbon::now()->toDateString())->count();
        // total of tamu
        $data['ct'] = Tamu::count();
        // total of tamu today
        $data['ctt'] = Tamu::where('tanggal','=',Carbon::now()->toDateString())->count();

        return view('Content.dashboard',$data);
    }
}
