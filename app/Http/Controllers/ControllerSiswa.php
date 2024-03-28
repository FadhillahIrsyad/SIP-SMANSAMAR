<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class ControllerSiswa extends Controller
{
    //
    public function getData(){
        $data['siswa'] = Siswa::all();
        return view('Content.data-siswa',$data);   
    }

    public function postData(Request $request){
        $input = $request->all();
        Siswa::create($input);
        return redirect()->route('Daftar Siswa');
    }

    public function getExistingData($id){
        $data['siswa'] = Siswa::find($id);
        return view('Content.Form.form-siswa-update', $data);
    }

    public function postUpdate(Request $request, $id){
        $input = $request->all();
        Siswa::find($id)->update($input);
        return redirect()->route('Daftar Siswa');
    }

    public function deleteData(Siswa $siswa){
        $siswa->delete();
        return redirect()->route('Daftar Siswa');
    }
}
