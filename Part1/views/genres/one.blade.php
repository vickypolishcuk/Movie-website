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
<h1>{{ $genre->name }}</h1>
<p><a href="{{ route('movies.all') }}">Фільми</a>:</p>
<ul>
    @if(count($movies) > 0)
        @foreach ($movies as $movie)
            <li><a href="{{ route('movies.one', $movie->id) }}">{{ $movie->title }}</a></li>
        @endforeach
    @else
        <p>Фільмів не знайдено.</p>
    @endif
</ul>
