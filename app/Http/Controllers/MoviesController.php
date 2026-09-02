<?php

namespace App\Http\Controllers;

class MoviesController extends Controller
{
    public function index()
    {
        return view('movies.index', ['movies' => $this->movies()]);
    }
    public function show($id){
        $movies = $this->movies();
        if (!isset($movies[$id])){
            abort(404);
        }
        return view('movies.show', ['movie' =>$movies[$id]]);
    }
    public function filter($year = null) {
        $movies = $this->movies();
        if($year){
            $year = (int) $year;
            $movies = array_filter($movies, function($movie) use($year){
                return $movie['year'] === $year;
            });
        }
        return view('movies.filter', ['movies' => $movies, 'activeYear' => $year]);
    }

    private function movies()
    {
        return[
            1 => ['id' => 1, 'title' => 'The Dark Knight', 'genre' => 'Action / Crime', 'rating' => 9.0, 'year' => 2008],
            2 => ['id' => 2, 'title' => 'Inception', 'genre' => 'Sci-Fi / Thriller', 'rating' => 8.8, 'year' => 2010],
            3 => ['id' => 3, 'title' => 'Interstellar', 'genre' => 'Sci-Fi / Drama', 'rating' => 8.7, 'year' => 2014],
            4 => ['id' => 4, 'title' => 'Parasite', 'genre' => 'Thriller / Drama', 'rating' => 8.5, 'year' => 2019],
            5 => ['id' => 5, 'title' => 'Avengers: Endgame', 'genre' => 'Action / Superhero', 'rating' => 8.4, 'year' => 2019],
        ];
    }
}