<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShowsController;


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/movies', [App\Http\Controllers\MoviesController::class, 'index'])->name('movies');
//Route::get('/shows', [App\Http\Controllers\ShowsController::class, 'index'])->name('shows');
//Route::get('/people', [App\Http\Controllers\PeopleController::class, 'index'])->name('people');


Route::prefix(\App\Helpers\Langs::getLocale())->middleware('langs')->group(function () {

    Route::get('/', IndexController::class);
    Route::get('/shows', [App\Http\Controllers\ShowsController::class, 'index'])->name('shows');
});



//Route::get('/', IndexController::class);
//Route::get('/shows', [App\Http\Controllers\ShowsController::class, 'index'])->name('shows');

//Main router for SPA
// Route::get('/{page}',IndexController::class)->where('page', '.*');  //All redirect to Vue

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/shows', [App\Http\Controllers\ShowsController::class, 'index'])->name('shows');

//Route::get('/{page}',IndexController::class)->where('page', '.*');  //All redirect to Vue
