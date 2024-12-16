<?php

//use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;





Route::prefix('{locale}')->group(function () {
   //= Route::get('/', [HomeController::class, 'index']); // Головна сторінка
    Route::get('/movies/popular', [MoviesController::class, 'getPopular']);
});


//Route::get('/movies/popular', [MoviesController::class, 'getPopular']);
