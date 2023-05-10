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
<h1>Жанри</h1>
<ul>
    @foreach ($genres as $genre)
        <li><a href="{{ route('genres.one', $genre->id) }}">{{ $genre->name }}</a></li>
    @endforeach
</ul>
