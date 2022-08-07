<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class Applications implements FromView
{
    public function view(): View
    {
        $applications = DB::table('users')
        ->join('admission_applications', 'users.id', '=', 'admission_applications.user_id')
        ->get();

        return view('admin.exports.applications', [
            'applications' => $applications
        ]);
    }
}
