<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminShowApplicationsController extends Controller
{
    public function render(){
        return view('admin.single-application');
    }
}
