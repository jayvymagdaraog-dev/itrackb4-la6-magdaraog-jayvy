<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/whoami', function () {
    return 'Jayvy P. Magdaraog | 2023-70362 | Block 4C | ITRACKB4 Laravel 12';
});

Route::get('/movies', [MoviesController::class, 'index']);