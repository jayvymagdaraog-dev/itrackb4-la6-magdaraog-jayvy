<nav>
    <a class="{{ request()->is('movies*') ? 'active' : '' }}"
       href="{{ route('movies.index') }}">Movie List</a>
    <a href="{{ route('movies.featured') }}">Featured Movie</a>
</nav>