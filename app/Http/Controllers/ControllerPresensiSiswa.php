<?php

namespace App\Http\Controllers;

use App\Models\PresensiSiswa as ps;
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
        ps::create($input);
        echo response()->json($input);
    }

    public function getExistingData($id){
        $data['presensi_siswa'] = ps::find($id);
        echo response()->json($data);
    }

    public function postUpdate(Request $request, $id) {
        $input = $request->all();
        ps::find($id)->update($input);
        echo response()->json($input);
    }

    public function deleteData(Request $request, $id) {
        $data = ps::find($id);
        $data->delete($request->all());
        echo response('done','200');
    }
}
