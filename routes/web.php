<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/whoami', function () {
    return 'Jayvy P. Magdaraog | 2023-70362 | Block 4C | ITRACKB4 Laravel 12';
});

Route::get('/movies', [MoviesController::class, 'index']) -> name('movies.index');
Route::get('/movies/featured', function(){
    return redirect()->route('movies.show', 2);
}) -> name('movies.featured');

Route::get('/movies/filter/{year?}', [MoviesController::class, 'filter']) ->name('movies.filter');

Route::get('/movies/{id}', [MoviesController::class, 'show']) -> name('movies.show');