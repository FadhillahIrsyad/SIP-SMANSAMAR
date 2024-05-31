<?php

namespace App\Http\Controllers;

use App\Models\PresensiSiswa as ps;
use App\Models\PresensiSiswa;
use App\Models\Siswa;
use App\Models\StatusKehadiran;
use Illuminate\Http\Request;
use Laracasts\Utilities\JavaScript\JavaScriptFacade as javascript;

class ControllerPresensiSiswa extends Controller
{
    //this function will pull all data from presensi_siswa table
    public function getData(){
        $data['presensi_siswa'] = ps::all();
        return view('Content.data-presensi-siswa',$data);
    }

    //this will get necessery data from siswa to be used on the form
    public function formData(){
        $data['siswa'] = Siswa::all();
        return view('Content.Form.form-presensi-siswa',$data);
    }

    //this function will push data from website into database
    public function postData(Request $request){
        $input = $request->all();
        $input['nisn'] = Siswa::where('nama','=',$request->input('nama'))->pluck('nisn');
        $input['status_pelanggaran'] = implode(', ',$request->input('status_pelanggaran'));
        ps::create($input);
        return redirect()->route('Presensi Siswa');
    }

    //this function will pull one data from database using it's id
    public function getExistingData($id){
        $data = ps::find($id);
        return view('Content.Form.form-presensi-siswa-update',[
            'presensi_siswa' => $data,
            'status_pelanggaran' => explode(', ',$data->status_pelanggaran),
        ]);
    }

    //this function will push the updated details of the data without making a new entry
    public function postUpdate(Request $request, $id) {
        $input = $request->all();
        $input['status_pelanggaran'] = implode(', ',$request->input('status_pelanggaran'));
        ps::find($id)->update($input);
        return redirect()->route('Presensi Siswa');
    }

    //this will delete the selected data from database
    public function deleteData(PresensiSiswa $presensi_siswa) {
        $presensi_siswa->delete();
        return redirect()->route('Presensi Siswa');
    }

    //thiw will import data from csv
    public function importCsv(Request $request){
        $file = $request->file('file');
        $filecontents = file($file->getPathname());

        $counter = 1;
        foreach($filecontents as $fc){
            if($counter > 1){
                $data = str_getcsv($fc);
                ps::create([
                    'nisn' => $data[0],
                    'nama' => $data[1],
                    'kelas' => $data[2],
                    'status_kehadiran' => $data[3],
                    'status_pelanggaran' => $data[4],
                    'keterangan' => $data[5],
                    'penanggung_jawab' => $data[6],
                ]);
            }
            $counter++;
        }

        return redirect()->back();
    }
}
