<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProgramExport;
use App\Exports\RgisterUsersExport;
use App\Exports\ApplyCandidate;
use App\Exports\UnapplyCandidate;
use App\Exports\Applications;


class AdminExportsController extends Controller
{
    public function program_export() 
    {
        return Excel::download(new ProgramExport, 'programs.xlsx');
    }

    public function register_user_export() 
    {
        return Excel::download(new RgisterUsersExport, 'register-users.xlsx');
    }

    public function apply_candidate_export(){
        return Excel::download(new ApplyCandidate, 'apply-candidate.xlsx');
    }

    public function unapply_candidate_export(){
        return Excel::download(new UnapplyCandidate, 'unapply-candidate.xlsx');
    }
    
    public function applications_export(){
        return Excel::download(new Applications, 'applications.xlsx');
    }
}
