<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Apprenant</title>
</head>
<body>
    <h1>Modifier un Apprenant</h1>
    
    <form action="{{ route('apprenants.update', $apprenant->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <label for="nom">Nom:</label>
        <input type="text" name="nom" value="{{ $apprenant->nom }}" required>
        <br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" value="{{ $apprenant->prenom }}" required>
        <br>

        <label for="age">Âge:</label>
        <input type="number" name="age" value="{{ $apprenant->age }}" required>
        <br>

        <button type="submit">Modifier</button>
    </form>
</body>
</html>
