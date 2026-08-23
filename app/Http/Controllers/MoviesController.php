<?php

namespace App\Http\Controllers;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = [
            ['title' => 'The Dark Knight', 'genre' => 'Action / Crime', 'rating' => 9.0],
            ['title' => 'Inception', 'genre' => 'Sci-Fi / Thriller', 'rating' => 8.8],
            ['title' => 'Interstellar', 'genre' => 'Sci-Fi / Drama', 'rating' => 8.7],
            ['title' => 'Parasite', 'genre' => 'Thriller / Drama', 'rating' => 8.5],
            ['title' => 'Avengers: Endgame', 'genre' => 'Action / Superhero', 'rating' => 8.4],
        ];

        return view('movies.index', ['movies' => $movies]);
    }
}