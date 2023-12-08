<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un nouvel Apprenant</title>
</head>
<body>
    <h1>Créer un nouvel Apprenant</h1>
    
    <form action="{{ route('apprenants.store') }}" method="post">
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required>
        <br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required>
        <br>

        <label for="age">Âge:</label>
        <input type="number" name="age" required>
        <br>

        <button type="submit">Créer</button>
    </form>
</body>
</html>
