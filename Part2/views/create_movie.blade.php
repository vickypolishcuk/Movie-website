<h1>Створення фільму</h1>
<form method="POST" action="/movies">
    @csrf
    <label for="title">Назва:</label><br>
    <input type="text" id="title" name="title"><br>

    <label for="description">Опис:</label><br>
    <textarea id="description" name="description"></textarea><br>

    <label for="release_date">Дата виходу:</label><br>
    <input type="text" id="release_date" name="release_date"><br>

    <input type="submit" value="Підтвердити">
</form>
