<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin\SetAdmissionDate;
use App\Models\AdmissionApplication;


class DashboardController extends Controller
{

    public function home(Request $req)
    {
        $user = User::find($req->user()->id);
        return view('interface.dashboard.home', ['user' => $user]);
    }

    public function dashboard(Request $req)
    {
        $user = User::find($req->user()->id);
        $open_date = SetAdmissionDate::orderby('id', 'desc')->first();
        return view('interface.dashboard.dashboard', ['user' => $user, 'open_date' => $open_date]);
    }

    public function edit_password(Request $req)
    {
        $user = User::find($req->user()->id);
        return view('interface.dashboard.passwordchange', ['user' => $user]);
    }

    public function update_password(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);


        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        Auth::logout();
        return redirect(route('login'))->with("success", "Password has changed. Please login aagain");
    }

    public function show_form(Request $req, $degree){
        $user = User::find($req->user()->id);
        return view('interface.dashboard.admissionform', ['user' => $user, 'degree'=>$degree]);
    }

    public function my_applications(Request $req){
        $empty = true;
        $user = User::find($req->user()->id);
        $candidate = User::find($req->user()->id);
        $applications = $candidate->admission_applications;
        if(!$applications->count()){
            $empty = false;
        }
        return view('interface.dashboard.myapplications', [
            'candidate' => $candidate, 'user'=> $user, 'applications'=>$applications, 'empty'=>$empty
        ]);
    }

    public function challan_upload(Request $req){
        $newChallanName = '';
        
        $req->validate([
            'challan' => 'required'
        ]);

        $application = AdmissionApplication::find($req->id);
        if ($req->hasFile('challan')) {
            $newChallanName = time() . '-' . $req->id . $application->program . '.' . $req->challan->extension();
            $req->challan->storeAs('public/challans', $newChallanName);
        }

        $application->challan = $newChallanName;
        $application->save();

        return back()->with('success', 'Challan uploaded successfully');
    }

}
