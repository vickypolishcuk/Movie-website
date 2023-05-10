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
<h1>{{ $movie->title }}</h1>
<p>{{ $movie->description }}</p>
<p>Дата виходу: {{ $movie->release_date }}</p>
<p><a href="{{ route('genres.all') }}">Жанр</a>:</p>
<p><a href="{{ route('genres.one', $movie->genre->id) }}">{{ $movie->genre->name }}</a></p>
