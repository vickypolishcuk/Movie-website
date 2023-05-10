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
<h1><a href="{{ route('all_movies') }}">Фільми</a>:</h1>
@foreach($movies as $movie)
    <h2><a href="{{ route('show_movie', ['id' => $movie->id]) }}">{{ $movie->title }}</a></h2>
    <h4>Кількість жанрів:{{ $movie->genres->count() }}</h4>
@endforeach
