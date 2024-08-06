<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TicketCategoryController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified', 'auth.session'])->group(function () {
    Route::get('/companies/index', [CompanyController::class, 'index'])->name('companies.index');
    Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
    Route::post('/companies/store', [CompanyController::class, 'store'])->name('companies.store');
    Route::get('/companies/edit/{id}', [CompanyController::class, 'edit'])->name('companies.edit');
    Route::put('/companies/update/{id}', [CompanyController::class, 'update'])->name('companies.update');
    Route::get('/companies/delete/{id}', [CompanyController::class, 'destroy'])->name('companies.destroy');
    Route::get('/companies/show/{id}', [CompanyController::class, 'show'])->name('companies.show');
    Route::post('/companies/search', [CompanyController::class, 'search'])->name('companies.search');

    Route::get('/licenses/index', [LicenseController::class, 'index'])->name('licenses.index');
    Route::get('/licenses/create', [LicenseController::class, 'create'])->name('licenses.create');
    Route::post('/licenses/store', [LicenseController::class, 'store'])->name('licenses.store');
    Route::get('/licenses/edit/{id}', [LicenseController::class, 'edit'])->name('licenses.edit');
    Route::put('/licenses/update/{id}', [LicenseController::class, 'update'])->name('licenses.update');
    Route::get('/licenses/delete/{id}', [LicenseController::class, 'destroy'])->name('licenses.destroy');
    Route::post('/licenses/search', [LicenseController::class, 'search'])->name('licenses.search');

    Route::get('/tickets/index', [TicketController::class, 'index'])->name('tickets.index');
    Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
    Route::post('/tickets/store', [TicketController::class, 'store'])->name('tickets.store');
    Route::get('/tickets/edit/{id}', [TicketController::class, 'edit'])->name('tickets.edit');
    Route::put('/tickets/update/{id}', [TicketController::class, 'update'])->name('tickets.update');
    Route::get('/tickets/show/{id}', [TicketController::class, 'show'])->name('tickets.show');

    Route::get('/ticketscategory/index', [TicketCategoryController::class, 'index'])->name('ticketscategory.index');

});

Route::middleware(['auth', 'verified', 'auth.session'])->group(function () {
    Route::get('/projects/index', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/update/{id}', [ProjectController::class, 'update'])->name('projects.update');
    Route::get('/projects/delete/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
    Route::get('/projects/show/{id}', [ProjectController::class, 'show'])->name('projects.show');
    Route::post('/projects/search', [ProjectController::class, 'search'])->name('projects.search');

});
