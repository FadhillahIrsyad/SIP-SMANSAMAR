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
        echo response()->json($input);
    }

    public function getExistingData($id){
        $data['siswa'] = Siswa::find($id);
        echo response()->json($data);
    }

    public function postUpdate(Request $request, $id){
        $input = $request->all();
        Siswa::find($id)->update($input);
        echo response()->json($request);
    }

    public function deleteData(Request $request, $id){
        $data = Siswa::find($id);
        $data->delete($request->all());
        return redirect('/api/data-siswa');
    }
}
