<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Acteur;
use App\Models\Artisanale;


class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventes = Artisanale::paginate(10); // 10 est le nombre d'offres par page, vous pouvez le changer
        return view('espacevente.voirannonce', ['ventes' => Artisanale::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $acteurs = Acteur::all();
        return view('espacevente.voirannonce', ['acteurs' => $acteurs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'lieu' => 'required|string|max:255',
            'prix' => 'required|string|max:255',
            'photo' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'acteur_id' => 'required|exists:acteurs,id',
        ]);

        OffreEmploi::create($data);

        return redirect()->route('espacevente.voirannonce')->with('success', 'Offre d\'emploi créée avec succès!');
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
