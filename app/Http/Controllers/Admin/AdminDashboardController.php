<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AdmissionApplication;

class AdminDashboardController extends Controller
{
    public function dashboard(){
        $register_user = User::where('is_admin', 'no')->count();
        $unapply = User::where('apply', 'no')->where('is_admin', 'no')->count();
        $apply = User::where('apply', 'yes')->where('is_admin', 'no')->count();
        $applications = AdmissionApplication::count();
        return view('admin.admin-dashboard', [
            'register_user'=>$register_user, 'applications'=>$applications,
            'unapply'=>$unapply, 'apply'=>$apply
        ]);
    }
}
