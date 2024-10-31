<?php

use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', function () {
    return view('home');
});


Route::resource('peliculas', PeliculaController::class);


 Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
