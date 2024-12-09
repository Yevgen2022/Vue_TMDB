<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/movies', [App\Http\Controllers\MoviesController::class, 'index'])->name('movies');
//Route::get('/shows', [App\Http\Controllers\ShowsController::class, 'index'])->name('shows');
//Route::get('/people', [App\Http\Controllers\PeopleController::class, 'index'])->name('people');


Route::get('/{page}',IndexController::class)->where('page', '.*');
