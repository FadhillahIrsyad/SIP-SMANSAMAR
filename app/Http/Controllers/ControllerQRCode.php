<?php

namespace App\Http\Controllers;

use App\Models\PresensiSiswa;
use App\Models\Siswa;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ControllerQRCode extends Controller
{
    //
    public function getData($id){
        // this will pull data from database
        $data = PresensiSiswa::select('id')->find($id); 
        // this will generate qr code
        $qrCode['qr_generated'] = QrCode::size('300')->generate(
          $data  
        ); 
        // echo response()->json($page);
        // this will return the qrcode that have been generated
        return view('Content.qr-generator',$qrCode); 
    }

    public function getSelectedData($id){
        $data['presensi_siswa'] = PresensiSiswa::find($id);
        return view('Content.scanned-qr',$data);
    }
}
