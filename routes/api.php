<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;




Route::get('/movies/popular', [MoviesController::class, 'getPopular']);
