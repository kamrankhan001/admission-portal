<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function render(){
        return view('interface.auth.login');
    }

    public function login(Request $req){
        
        $req->validate([
            'cnic' => 'required|numeric',
            'password' => 'required',
        ]);

        $credentials = $req->only('cnic', 'password');
       
        if(Auth::attempt($credentials)){
            return redirect(route("home"));
        }

        return redirect(route("login"))->with('error','Login details are not valid');
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }
}
