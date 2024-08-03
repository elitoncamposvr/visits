<?php

use App\Http\Controllers\CompanySettingController;
use App\Http\Controllers\LicenseController;
use Illuminate\Support\Facades\Route;


Route::middleware(['check.license', 'auth', 'verified', 'auth.session'])->group(function () {
    Route::get('/', function (){
        return redirect('/dashboard');
    });

    Route::get('/dashboard', function (){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/settings/index', [CompanySettingController::class, 'index'])->name('settings.index');
    Route::put('/settings/update/{id}', [CompanySettingController::class, 'update'])->name('settings.update');
});

Route::get('/licenses/inactive', [LicenseController::class, 'inactive'])->name('licenses.inactive');
