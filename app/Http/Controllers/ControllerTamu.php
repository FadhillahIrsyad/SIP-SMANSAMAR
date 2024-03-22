<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class ControllerTamu extends Controller
{
    //
    public function getData(){
        $data['tamu'] = Tamu::all();
        return view('Content.data-tamu',$data);
    }

    public function postData(Request $request){
        $input = $request->all();
        Tamu::create($input);
        return redirect()->route('Data Tamu');
    }

    public function getExistingData($id){
        $data['tamu'] = Tamu::find($id);
        return view('Content.Form.form-tamu-update',$data);
    }

    public function postUpdate(Request $request, $id) {
        $input = $request->all();
        Tamu::find($id)->update($input);
        return redirect()->route('Data Tamu');
    }

    public function deleteData(Tamu $tamu){
        $tamu->delete();
        return redirect()->route('Data Tamu');
    }
}
