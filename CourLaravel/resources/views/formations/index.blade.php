@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Formations</title>
</head>

<body>
    @section('content1')
        <h1>La lisete des formatons</h1>
    @endsection
    
    @section('content')
        <ul>
            @foreach($formations as $formation)
                <li>
                        {{ $formation->titre }}
                    
                    <a href="{{ route('formations.show', $formation->id) }}">Voir</a>
                    <a href="{{ route('formations.edit', $formation->id) }}">Modifier</a>
                    
                    <form action="{{ route('formations.destroy', $formation->id) }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <a href="{{ route('formations.create') }}">Créer une nouvelle Formation</a>
    @endsection
</body>
</html>

