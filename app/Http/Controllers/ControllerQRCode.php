<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ControllerQRCode extends Controller
{
    //
    public function getData(){
        $data = Siswa::find('15'); // this will pull data from database
        $qrCode = QrCode::generate(
            $data
        ); // this will generate qr code
        return $qrCode; // this will return the qrcode that have been generated
    }
}
