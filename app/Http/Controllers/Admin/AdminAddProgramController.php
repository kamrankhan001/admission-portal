<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Program;


class AdminAddProgramController extends Controller
{
    public function render(){
        return view('admin.add-programs');
    }

    public function add_program(Request $req){

        $req->validate([
            'degree_name' => 'required|max:60',
            'program_name' => 'required|max:60',
            'total_year' => 'required|numeric',
            'total_semester' => 'required|numeric',
            'registration_fee' => 'required|numeric',
            'fee_per_semester' => 'required|numeric',
        ]);

        Program::create([
            'degree_name' => $req->degree_name,
            'program_name' => $req->program_name,
            'total_year' => $req->total_year,
            'total_semtr' => $req->total_semester,
            'register_fee' => $req->registration_fee,
            'fee_per_semtr' => $req->fee_per_semester,
        ]);

        return back()->with('success', 'Program added successfully 😄');

    }

    public function all_program(){
        return view('admin.all-programs');
    }
}
