<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UnapplyCandidate implements FromView
{
    public function view(): View
    {
        return view('admin.exports.unapply-candidate', [
            'candidates' => User::where('is_admin', 'no')->where('apply', 'no')->get()
        ]);
    }
}
