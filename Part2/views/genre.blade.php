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
<h1><a href="{{ route('show_genre', ['id' => $genre->id]) }}">{{ $genre->name }}</a></h1>

<a href="{{ route('all_movies') }}">Фільми</a>:
@if(count($genre_movies) > 0)
    <ul>
        @foreach($genre_movies as $movie)
            <li><a href="{{ route('show_movie', ['id' => $movie->id]) }}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>
@else
    <p>Фільмів не знайдено.</p>
@endif
<form action="{{ route('genres.attach_movie', ['id' => $genre->id]) }}" method="POST">
    @csrf
    <label for="movie_id">Додати фільм:</label>
    <select name="movie_id">
        <option value="">-- Виберіть опцію --</option>
        @foreach($movies as $movie)
            <option value="{{ $movie->id }}">{{ $movie->title }}</option>
        @endforeach
    </select>
    <button type="submit">Додати</button>
</form>
