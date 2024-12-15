<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;





Route::prefix('{locale}')->group(function () {
    Route::get('/movies/popular', [MoviesController::class, 'getPopular']);
});


//Route::get('/movies/popular', [MoviesController::class, 'getPopular']);
