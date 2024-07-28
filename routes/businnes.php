<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/companies/index', [CompanyController::class, 'index'])->name('companies.index');
    Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
    Route::post('/companies/store', [CompanyController::class, 'store'])->name('companies.store');
    Route::get('/companies/edit/{id}', [CompanyController::class, 'edit'])->name('companies.edit');
    Route::put('/companies/update/{id}', [CompanyController::class, 'update'])->name('companies.update');
    Route::get('/companies/delete/{id}', [CompanyController::class, 'destroy'])->name('companies.destroy');
    Route::get('/companies/show/{id}', [CompanyController::class, 'show'])->name('companies.show');
    Route::post('/companies/search', [CompanyController::class, 'search'])->name('companies.search');


});
