<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie['title'] }}</title>
</head>
<body>
    <h1>{{ $movie['title'] }}</h1>

    <p>Genre: {{ $movie['genre'] }}</p>
    <p>Rating: {{ $movie['rating'] }}</p>
    <p>Year: {{ $movie['year'] }}</p>
    <p>Prepared by: Jayvy P. Magdaraog</p>

    <a href="{{ route('movies.index') }}">Back to movie list</a>
</body>
</html>