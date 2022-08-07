<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\SetAdmissionDate;

class AdminSetAdmissionDateController extends Controller
{
    public function render(){
        return view('admin.admission-date');
    }

    public function create(Request $req){

        $req->validate([
            'opening_date' => 'required|date',
            'closing_date' => 'required|date',
            'challan_no' => 'required|numeric',
            'batch_no' => 'required|numeric',
        ]);

        SetAdmissionDate::create([
            'opening_date' => $req->opening_date,
            'closing_date' => $req->closing_date,
            'challan_no' => $req->challan_no,
            'batch_no' => $req->batch_no,
        ]);

        return back()->with('success', 'Admission date set successfully 😄');

    }
}
