<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acteur;
class OffreEmploi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_offre_emploi',
        'titre',
        'description',
        'lieu',
        'type_contrat',
        'salaire',
        'date_debut',
        'date_fin',
        'acteur_id',
    ];



    public function acteur()
    {
        return $this->belongsTo(Acteur::class, 'id_acteur');
    }
}
