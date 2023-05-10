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
<h1><a href="{{ route('all_genres') }}">Жанри</a>:</h1>
@foreach($genres as $genre)
    <h2><a href="{{ route('show_genre', ['id' => $genre->id]) }}">{{ $genre->name }}</a></h2>
    <h4>Кількість фільмів:{{ $genre->movies->count() }}</h4>
@endforeach
