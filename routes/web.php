<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ExportsController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminSetAdmissionDateController;
use App\Http\Controllers\Admin\AdminAddProgramController;
use App\Http\Controllers\Admin\AdminShowApplicationsController;
use App\Http\Controllers\Admin\AdminChangeCredentialsController;
use App\Http\Controllers\Admin\AdminExportsController;


Route::get('/', function(){
    return redirect(route('login'));
});


Route::get('login', [LoginController::class, 'render'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('register', [RegisterController::class, 'render'])->name('register');
Route::post('register', [RegisterController::class, 'store']);

Route::middleware(['auth'])->group(function(){
    Route::get('home', [DashboardController::class, 'home'])->name('home');
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('admission/form/{degree}', [DashboardController::class, 'show_form'])->name('show_form');
    Route::get('my/applications', [DashboardController::class, 'my_applications'])->name('myapplications');
    Route::post('my/applications/challan/upload', [DashboardController::class, 'challan_upload'])->name('challan_upload');
    Route::get('my/applications/inforamtion/download/{id}/{program}', [ExportsController::class, 'candidate_info'])->name('candidate_info');
    Route::get('my/applications/challan/download/{program}', [ExportsController::class, 'challan_download'])->name('challan_download');
    Route::get('passwordchange', [DashboardController::class, 'edit_password'])->name('passwordchange');
    Route::post('passwordchange', [DashboardController::class, 'update_password'])->name('passwordchange');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

});


// Admin
Route::get('admin/login', [AdminLoginController::class, 'render'])->name('admin_login');
Route::post('admin/login', [AdminLoginController::class, 'login']);

Route::middleware(['auth', 'is_admin'])->group(function(){
    Route::get('admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin_dashboard');

    Route::get('admin/changecredentials', [AdminChangeCredentialsController::class, 'render'])->name('change_credentials');
    Route::post('admin/changecredentials', [AdminChangeCredentialsController::class, 'update_password']);

    // Admission Navs
    Route::get('admin/admission/set/admission/date', [AdminSetAdmissionDateController::class, 'render'])->name('admission_date');
    Route::post('admin/admission/set/admission/date', [AdminSetAdmissionDateController::class, 'create']);
    Route::get('admin/admission/applications', [AdminShowApplicationsController::class, 'render'])->name('applications');

    // Programs Navs
    Route::get('admin/programs/add/programs', [AdminAddProgramController::class, 'render'])->name('add_program');
    Route::post('admin/programs/add/programs', [AdminAddProgramController::class, 'add_program']);
    Route::get('admin/programs/all/programs', [AdminAddProgramController::class, 'all_program'])->name('all_program');
    
    
    // Exports
    Route::get('admin/programs/all/programs/export', [AdminExportsController::class, 'program_export'])->name('program_export');
    Route::get('admin/candidates/register/candidates/export', [AdminExportsController::class, 'register_user_export'])->name('register_user_export');
    Route::get('admin/candidates/apply/candidates/export', [AdminExportsController::class, 'apply_candidate_export'])->name('apply_candidate_export');
    Route::get('admin/candidates/unapply/candidates/export', [AdminExportsController::class, 'unapply_candidate_export'])->name('unapply_candidate_export');
    Route::get('admin/candidates/applications/export', [AdminExportsController::class, 'applications_export'])->name('applications_export');

    Route::get('admin/candidates/register/candidates', function(){
        return view('admin.register-user');
    })->name('register_user');

    Route::get('admin/candidates/candidates/apply', function(){
        return view('admin.candidates-apply');
    })->name('candidates_apply');

    Route::get('admin/candidates/candidates/doesnt/apply', function(){
        return view('admin.candidates-doesnt-apply');
    })->name('candidates_doesnt_apply');

});