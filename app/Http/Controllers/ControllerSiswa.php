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

    public function importCSV(Request $request){
        $request->validate([
            'import_csv' => 'required|mimes:csv',
        ]);

        $file = $request->file('import_csv');
        $handle = fopen($file->path(),'r');

        fgetcsv($handle);

        $chunksize = 25;
        while(!feof($handle)){
            $chunkdata = [];

            for($i=0; $i<$chunksize; $i++){
                $data = fgetcsv($handle);
                if($data === false){
                    break;
                }
                $chunkdata[] = $data;
            }
            $this->getchunkdata($chunkdata);
        }
        fclose($handle);
        
        return redirect()->route('Daftar Siswa');
    }

    public function getchunkdata($chunkdata){
        foreach($chunkdata as $column){
            $nisn = $column[0];
            $nama = $column[1];
            $kelas = $column[2];
            $no_hp_ortu = $column[3];

            $siswa = new Siswa();
            $siswa->nisn = $nisn;
            $siswa->nama = $nama;
            $siswa->kelas = $kelas;
            $siswa->no_hp_ortu = $no_hp_ortu;
            $siswa->save();
        }
    }
}
