<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\AdmissionApplication;

class ExportsController extends Controller
{
    public function candidate_info($id, $program)
    {
        $info = DB::table('admission_applications')
            ->where('user_id', $id)
            ->where('program', $program)
            ->join('users', 'admission_applications.user_id', '=', 'users.id')
            ->first();
        $pdf = Pdf::loadView('interface.exports.candidate-info', ['info' => $info]);
        return $pdf->download('information.pdf');
    }

    public function challan_download(Request $req, $program)
    {
        $candidate = User::find($req->user()->id);
        $application = AdmissionApplication::where('user_id', $req->user()->id)->where('program', $program)->first();
        $pdf = Pdf::loadView('interface.exports.challan', [
            'candidate' => $candidate,
            'application' => $application
        ])->setPaper('a4', 'landscape');
        return $pdf->download('challan.pdf');
    }
}
