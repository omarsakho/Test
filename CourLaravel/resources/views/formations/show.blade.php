<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la Formation</title>
</head>
<body>
    <h1>Détails de la Formation</h1>
    
    <p>Titre: {{ $formation->titre }}</p>
    <p>Description: {{ $formation->description }}</p>

    <h2>Apprenants:</h2>
    <ul>
        @foreach($formation->apprenants as $apprenant)
            <li>{{ $apprenant->nom }} {{ $apprenant->prenom }}</li>
        @endforeach
    </ul>
</body>
</html>
