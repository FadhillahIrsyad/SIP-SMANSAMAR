<?php

namespace App\Http\Controllers;

use App\Models\PresensiSiswa as ps;
use App\Models\PresensiSiswa;
use App\Models\StatusKehadiran;
use Illuminate\Http\Request;

class ControllerPresensiSiswa extends Controller
{
    //
    public function getData(){
        $data['presensi_siswa'] = ps::all();
        return view('Content.data-presensi-siswa',$data);
    }

    public function postData(Request $request){
        $input = $request->all();
        $input['status_pelanggaran'] = implode(', ',$request->input('status_pelanggaran'));
        ps::create($input);
        return redirect()->route('Presensi Siswa');
    }

    public function getExistingData($id){
        $data = ps::find($id);
        return view('Content.Form.form-presensi-siswa-update',[
            'presensi_siswa' => $data,
            'status_pelanggaran' => explode(', ',$data->status_pelanggaran),
        ]);
    }

    public function postUpdate(Request $request, $id) {
        $input = $request->all();
        $input['status_pelanggaran'] = implode(', ',$request->input('status_pelanggaran'));
        ps::find($id)->update($input);
        return redirect()->route('Presensi Siswa');
    }

    public function deleteData(PresensiSiswa $presensi_siswa) {
        $presensi_siswa->delete();
        return redirect()->route('Presensi Siswa');
    }

    public function addData(){
        $data['status_kehadiran'] = StatusKehadiran::all();
        return view('Content.Form.form-presensi-siswa', $data);
    }

    public function testing(){
        $data['presensi_siswa'] = ps::select('nama','kelas','nisn','status_kehadiran')->find('5');
        $data['status_pelanggaran'] = explode(',',ps::select('status_pelanggaran')->find('5'),6);
        echo response()->json($data);
    }
}
