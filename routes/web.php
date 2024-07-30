<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified', 'auth.session'])->group(function () {
    Route::get('/', function (){
        return redirect('/dashboard');
    });

    Route::get('/dashboard', function (){
        return view('dashboard');
    })->name('dashboard');

});
