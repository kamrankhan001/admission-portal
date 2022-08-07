<?php

namespace App\Exports;

use App\Models\Admin\Program;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProgramExport implements FromView
{
    public function view(): View
    {
        return view('admin.exports.programs', [
            'programs' => Program::all()
        ]);
    }
}
