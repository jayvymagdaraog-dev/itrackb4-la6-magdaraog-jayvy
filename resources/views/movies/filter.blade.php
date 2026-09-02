<!DOCTYPE html>
<html>
<head>
    <title>My Movie List</title>
</head>
<body>
    <h1>My Movie List</h1>
    <p>@if($activeYear) 
        Showing year: {{ $activeYear}}
        @else
        Showing all movies 
        @endif
    </p>
 
    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Rating</th>
            <th>Year</th>
        </tr>

        @foreach ($movies as $movie)
        <tr>
            <td>{{ $movie['title'] }}</td>
            <td>{{ $movie['genre'] }}</td>
            <td>{{ $movie['rating'] }}</td>
            <td>{{ $movie['year'] }}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('movies.index')}} ">Back to movie list</a>
</body>
</html>
