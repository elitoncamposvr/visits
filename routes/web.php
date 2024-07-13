<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function (){
        return redirect('/dashboard');
    });

    Route::get('/dashboard', function (){
        return view('dashboard');
    })->name('dashboard');

});
