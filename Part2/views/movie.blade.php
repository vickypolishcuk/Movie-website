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
<h1><a href="{{ route('show_movie', $movie->id) }}">{{ $movie->title }}</a></h1>
<p>Опис: {{ $movie->description }}</p>
<p>Дата релізу: {{ $movie->release_date }}</p>
<a href="{{ route('all_genres') }}">Жанри</a>:
@if(count($movie_genres) > 0)
    @foreach($movie_genres as $genre)
        <span><a href="{{ route('show_genre', $genre->id) }}">{{ $genre->name }}</a>, </span>
    @endforeach
@else
    <p>Жанрів не знайдено.</p>
@endif
<form action="{{ route('movies.attach_genre', $movie->id) }}" method="POST">
    @csrf
    <label for="genre">Додати жанр:</label>
    <select class="form-control" name="genre_id">
        <option value="">-- Виберіть опцію --</option>
        @foreach($genres as $genre)
            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
        @endforeach
    </select>
    <button type="submit">Додати</button>
</form>
