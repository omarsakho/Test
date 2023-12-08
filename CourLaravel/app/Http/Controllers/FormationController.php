<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        return view('formations.index', ['formations' => $formations]);
    }

    public function show($id)
    {
        $formation = Formation::find($id);
        return view('formations.show', ['formation' => $formation]);
    }

    public function create()
    {
        return view('formations.create');
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
        ]);

        // Création d'une nouvelle formation
        $formation = Formation::create($request->all());

        // Redirection vers la liste des formations
        return redirect()->route('formations.index');
    }

    public function edit($id)
    {
        $formation = Formation::find($id);
        return view('formations.edit', ['formation' => $formation]);
    }

    public function update(Request $request, $id)
    {
        // Validation des données du formulaire
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
        ]);

        // Mise à jour de la formation
        $formation = Formation::find($id);
        $formation->update($request->all());

        // Redirection vers la liste des formations
        return redirect()->route('formations.index');
    }

    public function destroy($id)
    {
        // Suppression de la formation
        $formation = Formation::find($id);
        $formation->delete();

        // Redirection vers la liste des formations
        return redirect()->route('formations.index');
    }
}
