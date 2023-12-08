<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Apprenant</title>
</head>
<body>
    <h1>Détails de l'Apprenant</h1>
    
    <p>Nom: {{ $apprenant->nom }}</p>
    <p>Prénom: {{ $apprenant->prenom }}</p>
    <p>Âge: {{ $apprenant->age }}</p>

    <h2>Formations:</h2>
    <ul>
        @foreach($apprenant->formation as $formation)
            <li>{{ $formation->titre }}</li>
        @endforeach
    </ul>
</body>
</html>
