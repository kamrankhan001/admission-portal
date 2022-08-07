<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function render(){
        return view('interface.auth.register');
    }

    public function store(Request $req){

        $newPictureName = "";

        $req->validate([
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'gender' => 'required',
            'state' => 'required',
            'city' => 'required',
            'postcode' => 'required|numeric',
            'date_of_birth' => 'required',
            'email' => 'required|email|unique:users',
            'cnic' => 'required|numeric|unique:users',
            'picture' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'password' => 'required|min:8|max:20|confirmed'
        ]);

        if ($req->hasFile('picture')) {
            $newPictureName = time() . '-' . $req->first_name . $req->last_name . '.' . $req->picture->extension();
            $req->picture->storeAs('public/candidate-avatar', $newPictureName);
        }

        User::create([
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'gender' => $req->gender,
            'state' => $req->state,
            'city' => $req->city,
            'post_code' => $req->postcode,
            'dob' => $req->date_of_birth,
            'email' => $req->email,
            'cnic' => $req->cnic,
            'picture' => $newPictureName,
            'password' => Hash::make($req->password)
        ]);

        return redirect(route('login'))->with('success', 'You are registered. Please Login');
    }
}


// use Illuminate\Support\Facades\Hash;
// use App\Models\User;
// User::create([
//     'first_name' => 'admin',
//     'last_name' => 'admin',
//     'gender' => 'male',
//     'state' => 'punjab',
//     'city' => 'bahawalpur',
//     'post_code' => '23123',
//     'dob' => '1999-3-2',
//     'email' => 'admin@admin.com',
//     'cnic' => '1221279129012',
//     'password' => Hash::make('adminadmin'),
//     'is_admin' => 'yes'
// ]);