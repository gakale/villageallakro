<?php

namespace App\Http\Controllers;

use App\Models\Acteur;
use App\Models\OffreEmploi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Offres_emploiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offre_emplois = OffreEmploi::paginate(10); // 10 est le nombre d'offres par page, vous pouvez le changer
        return view('offredemploi.index', ['offre_emplois' => OffreEmploi::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $acteurs = Acteur::all();
        return view('offredemploi.create', ['acteurs' => $acteurs]);
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
            'type_contrat' => 'nullable|string|max:255',
            'salaire' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'users_id' => 'exists:users,id',
        ]);
        $data = new OffreEmploi;
        $data->titre = $request->titre;
        $data->description = $request->description;
        $data->lieu = $request->lieu;
        $data->type_contrat = $request->type_contrat;
        $data->salaire = $request->salaire;
        $data->date_debut = $request->date_debut;
        $data->date_fin = $request->date_fin;
        $data->users_id = Auth::user()->id;  // Ajoutez cette ligne
        $data->save();


        return redirect()->route('offre_emplois.create')->with('success', 'Offre d\'emploi créée avec succès!');
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
