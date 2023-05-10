<h1>Створити фільм</h1>
<form method="POST" action="/movies">
    @csrf
    <label for="title">Назва:</label><br>
    <input type="text" id="title" name="title"><br>

    <label for="description">Опис:</label><br>
    <textarea id="description" name="description"></textarea><br>

    <label for="release_date">Дата виходу:</label><br>
    <input type="text" id="release_date" name="release_date"><br>

    <select id="genre_id" name="genre_id" required>
        <option value="">-- Виберіть опцію --</option>
        @foreach ($genres as $genre)
            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
        @endforeach
    </select>

    <input type="submit" value="Підтвердити">
</form>
