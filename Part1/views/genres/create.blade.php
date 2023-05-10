<h1>Створення жанру</h1>
<form method="POST" action="/genres">
    @csrf
    <label for="name">Назва:</label><br>
    <input type="text" id="name" name="name"><br>

    <input type="submit" value="Підтвердити">
</form>
