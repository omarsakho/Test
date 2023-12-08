@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Apprenants</title>
</head>
<body>
    @section('content1')
        <h1>Liste des Apprenants</h1>
    @endsection

    @section('content')
        <ul>
            @foreach($apprenants as $apprenant)
                <li>
                    {{ $apprenant->nom }} {{ $apprenant->prenom }}
                    <a href="{{ route('apprenants.show', $apprenant->id) }}">Voir</a>
                    
                    <a href="{{ route('apprenants.edit', $apprenant->id) }}">Modifier</a>
                    
                    <form action="{{ route('apprenants.destroy', $apprenant->id) }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <a href="{{ route('apprenants.create') }}">Créer un nouvel Apprenant</a>
    @endsection
</body>
</html>

