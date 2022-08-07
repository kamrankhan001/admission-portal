<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RgisterUsersExport implements FromView
{
    public function view(): View
    {
        return view('admin.exports.register-user', [
            'candidates' => User::where('is_admin', 'no')->get()
        ]);
    }
}
