<style>
    a {
        color: black;
        text-decoration: none;
    }
    a:hover {
        color: #014ab2;
        text-shadow: 1px 1px;
    }
</style>
<h1>Фільми</h1>
<ul>
    @foreach ($movies as $movie)
        <li><a href="{{ route('movies.one', $movie->id) }}">{{ $movie->title }}</a></li>
    @endforeach
</ul>
