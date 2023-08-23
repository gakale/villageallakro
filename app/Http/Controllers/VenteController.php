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
        // je doit recupéré uniquement ceux qui sont en vente

         $ventes = Artisanale::where('statut', 'en vente')->get();
        return view('espacevente.voirannonce', ['ventes' => $ventes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $acteurs = Acteur::all();
        return view('espacevente.publierannonce', ['acteurs' => $acteurs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|integer',
            'categorie' => 'required|string|max:255',
            'collection' => 'nullable|string|max:255',
            'etat' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'statut' => 'nullable|string|max:255',
            'acteur_id' => 'required|exists:acteurs,id',
        ]);
        // Créer une nouvelle entrée dans la base de données
        $artisanale = new Artisanale;
        $artisanale->nom = $request->nom;
        $artisanale->description = $request->description;
        $artisanale->prix = $request->prix;
        $artisanale->categorie = $request->categorie;
        $artisanale->collection = $request->collection;
        $artisanale->etat = $request->etat;
        $artisanale->statut = $request->statut;
        $artisanale->acteur_id = $request->acteur_id;

// Télécharger l'image si elle est fournie
        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->storeAs('images', $imageName);
            $artisanale->photo = 'images/'.$imageName;
        } else {
            $artisanale->photo = null;
        }

        $artisanale->save();


        // Rediriger vers une page avec un message de succès
        return redirect()->route('voireannonce.create')->with('success', 'Annonce artisanale créée avec succès!');




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
