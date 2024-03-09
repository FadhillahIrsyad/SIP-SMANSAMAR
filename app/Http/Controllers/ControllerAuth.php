<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

class ControllerAuth extends Controller
{
    //function to enables user logging in
    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
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
        return redirect('/');
    }

    //function for registering new account
    public function postRegister(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'id_role' => 'required',
        ]);

        $input = $request->all();
        $password = bcrypt($request->input('password'));
        $input['password'] = "$password";

        User::create($input);
        return redirect()->route('login');
    }

    public function postUpdate(Request $request){
    }
}
