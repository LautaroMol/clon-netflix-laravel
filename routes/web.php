<?php

use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('peliculas', PeliculaController::class);
