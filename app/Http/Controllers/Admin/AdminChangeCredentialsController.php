<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminChangeCredentialsController extends Controller
{
    public function render(){
        $credentials = User::find(auth()->user()->id);
        return view('admin.change-credentials', ['credentials'=>$credentials]);
    }

    public function update_password(Request $request)
    {
        # Validation
        $request->validate([
            'email' => 'required|email',
            'old_password' => 'required',
            'password' => 'required|min:8',
        ]);


        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password),
            'email' => $request->email
        ]);

        Auth::logout();
        return redirect(route('admin_login'))->with("success", "Password has changed. Please login aagain");
    }
}
