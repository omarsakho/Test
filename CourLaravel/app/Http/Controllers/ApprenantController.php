<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;

class ApprenantController extends Controller
{
    public function index()
    {
        $apprenants = Apprenant::all();
        return view('apprenants.index', ['apprenants' => $apprenants]);
    }

    public function show($id)
    {
        $apprenant = Apprenant::find($id);
        return view('apprenants.show', ['apprenant' => $apprenant]);
    }

    public function create()
    {
        return view('apprenants.create');
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required|integer',
        ]);

        // Création d'un nouvel apprenant
        $apprenant = Apprenant::create($request->all());

        // Redirection vers la liste des apprenants
        return redirect()->route('apprenants.index');
    }

    public function edit($id)
    {
        $apprenant = Apprenant::find($id);
        return view('apprenants.edit', ['apprenant' => $apprenant]);
    }

    public function update(Request $request, $id)
    {
        // Validation des données du formulaire
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required|integer',
        ]);

        // Mise à jour de l'apprenant
        $apprenant = Apprenant::find($id);
        $apprenant->update($request->all());

        // Redirection vers la liste des apprenants
        return redirect()->route('apprenants.index');
    }

    public function destroy($id)
    {
        // Suppression de l'apprenant
        $apprenant = Apprenant::find($id);
        $apprenant->delete();

        // Redirection vers la liste des apprenants
        return redirect()->route('apprenants.index');
    }
}
