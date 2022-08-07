<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function render(){
        return view('admin.login');
    }

    public function login(Request $req){
        
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $req->only('email', 'password');
       
        if(Auth::attempt($credentials)){
            return redirect(route("admin_dashboard"));
        }

        return redirect(route("admin_login"))->with('error','Login details are not valid');
    }

}

// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\DB;

// DB::table('users')->insert([
//     'first_name' => 'Kamran',
//     'last_name' => 'Khan',
//     'gender' => 'male',
//     'state' => 'punjab',
//     'city' => 'Bahawalpur',
//     'post_code' => '63100',
//     'dob' => '6/20/2001',
//     'email' => 'admin@admin.com',
//     'cnic' => '3120284727014',
//     'password' =>  Hash::make('adminadmin'),
//     'is_admin' => 'yes',
// ]);