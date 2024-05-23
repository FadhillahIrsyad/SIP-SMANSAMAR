<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerAuth extends Controller
{
    //function to enables user logging in
    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'nip_nisn' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    //function to enables user to logout
    public function postLogout(){
        Auth::logout();
        return redirect()->route('Login');
    }

    //function for registering new account
    public function postRegister(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'nip_nisn' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $input = $request->all();
        $password = bcrypt($request->input('password'));
        $input['password'] = "$password";

        User::create($input);
        echo response()->json($input);
        return redirect()->route('Penugasan');
    }

    public function getUpdate($id){
        $data['user'] = User::find($id);
        return view('Content.Form.form-register-update',$data);
    }

    public function postUpdate(Request $request, $id){
        
        $this->validate($request, [
        'name' => 'required',
        'nip_nisn' => 'required',
        'password' => 'required',
        'role' => 'required'
        ]); 
       
        $input = $request->all();
        $password = bcrypt($request->input('password'));
        $input['password'] = "$password";

        User::find($id)->update($input);
        return redirect()->route('Penugasan');
    }

    public function postDelete($id){
        User::find($id)->delete();
        return redirect()->route('Penugasan');
    }

    public function getData(){
        $data['penugasan'] = User::all();
        return view('Content.penugasan',$data);
    }
}