@extends('layouts.app')

@section('title', 'Movie List')

@section('content')
    <h2>All Movies</h2>

    <p>
        Genre:
        <a href="{{ route('movies.index', ['genre' => 'all', 'year' => $year]) }}">All</a>
        <a href="{{ route('movies.index', ['genre' => 'Action', 'year' => $year]) }}">Action</a>
    </p>

    <p>
        Year:
        <a href="{{ route('movies.index', ['genre' => $genre, 'year' => 'all']) }}">All</a>
        <a href="{{ route('movies.index', ['genre' => $genre, 'year' => 2019]) }}">2019</a>
    </p>

    <a href="{{ route('movies.index') }}">Clear filters</a>

    <p>
        Showing:
        genre = {{ $genre }}, year = {{ $year }}
    </p>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Rating</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <a href="{{ route('movies.show', ['movie' => $movie['id']]) }}">{{ $movie['title'] }}</a>
                    </td>
                    <td>{{ $movie['genre'] }}</td>
                    <td>{{ $movie['rating'] }}</td>
                    <td>
                        {{ $movie['year'] }}
                        @if ($movie['year'] >= 2020)
                            <span class="badge bg-primary">New Release</span>
                        @else
                            <span class="badge bg-secondary">Classic</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No movies found yet. Add one to get started.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection