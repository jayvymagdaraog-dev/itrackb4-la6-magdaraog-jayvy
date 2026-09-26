<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $genre = $request->query('genre', 'all');
    $year = $request->query('year', 'all');

    $movies = $this->movies();

    if ($genre !== 'all') {
        $movies = array_filter($movies, fn($m) => str_contains($m['genre'], $genre));
    }

    if ($year !== 'all') {
        $movies = array_filter($movies, fn($m) => $m['year'] === (int) $year);
    }

    return view('movies.index', [
        'movies' => $movies,
        'genre' => $genre,
        'year' => $year,
    ]);
}
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movies = $this->movies();

        if (!isset($movies[$id])) {
            abort(404);
        }

        return view('movies.show', ['movie' => $movies[$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Display the featured movie.
     */
    public function featured()
    {
        return redirect()->route('movies.show', ['movie' => 2]);
    }

    /**
     * Display movies filtered by year.
     */
    public function filter($year = null)
    {
        $movies = $this->movies();

        if ($year) {
            $year = (int) $year;

            $movies = array_filter($movies, function ($movie) use ($year) {
                return $movie['year'] === $year;
            });
        }

        return view('movies.filter', [
            'movies' => $movies,
            'activeYear' => $year
        ]);
    }

    /**
     * Private movie data helper.
     */
    private function movies()
    {
        return [
            1 => ['id' => 1, 'title' => 'The Dark Knight', 'genre' => 'Action / Crime', 'rating' => 9.0, 'year' => 2008],
            2 => ['id' => 2, 'title' => 'Inception', 'genre' => 'Sci-Fi / Thriller', 'rating' => 8.8, 'year' => 2010],
            3 => ['id' => 3, 'title' => 'Interstellar', 'genre' => 'Sci-Fi / Drama', 'rating' => 8.7, 'year' => 2014],
            4 => ['id' => 4, 'title' => 'Parasite', 'genre' => 'Thriller / Drama', 'rating' => 8.5, 'year' => 2019],
            5 => ['id' => 5, 'title' => 'Avengers: Endgame', 'genre' => 'Action / Superhero', 'rating' => 8.4, 'year' => 2019],
            6 => ['id' => 6, 'title' => 'The Matrix', 'genre' => 'Sci-Fi / Action', 'rating' => 8.7, 'year' => 1999],
        ];
    }
}