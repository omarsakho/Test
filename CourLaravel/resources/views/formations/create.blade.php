<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une nouvelle Formation</title>
</head>
<body>
    <h1>Créer une nouvelle Formation</h1>
    
    <form action="{{ route('formations.store') }}" method="post">
        @csrf
        <label for="titre">Titre:</label>
        <input type="text" name="titre" required>
        <br>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea>
        <br>

        <button type="submit">Créer</button>
    </form>
</body>
</html>
