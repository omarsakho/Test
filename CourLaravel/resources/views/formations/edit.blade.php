<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une Formation</title>
</head>
<body>
    <h1>Modifier une Formation</h1>
    
    <form action="{{ route('formations.update', $formation->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <label for="titre">Titre:</label>
        <input type="text" name="titre" value="{{ $formation->titre }}" required>
        <br>

        <label for="description">Description:</label>
        <textarea name="description" required>{{ $formation->description }}</textarea>
        <br>

        <button type="submit">Modifier</button>
    </form>
</body>
</html>
