<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EspaceMembre;
use Illuminate\Http\Request;

class EspaceMembreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profils = EspaceMembre::paginate(10); // 10 est le nombre d'offres par page, vous pouvez le changer
        return view('espacemembre.index', ['profils' => EspaceMembre::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'sexe' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'residence' => 'required|string|max:255',
            'nationalite' => 'required|string|max:255',
            'niveauetude' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'nbre_enfant' => 'required|string|max:255',
            'fonction' => 'required|string|max:255',
            'acteur_id' => 'required|exists:acteurs,id',
        ]);

        EspaceMembre::create($data);

        return redirect()->route('offredemploi.create')->with('success', 'Offre d\'emploi créée avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
