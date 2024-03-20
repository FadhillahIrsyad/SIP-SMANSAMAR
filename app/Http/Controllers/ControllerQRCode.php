<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerQRCode extends Controller
{
    //
    public function getData(){
        return view('qrcode');
    }
}
