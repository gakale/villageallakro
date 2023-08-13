<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Metier;
use App\Models\CentreInteret;
use App\Models\Demenagement;
use App\Models\Competence;
use App\Models\Amenagement;
use App\Models\OffreEmploi;

class Acteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'date_naissance',
        'nationalite',
        'niveau_etude',
        'adresse',
        'telephone',
        'email',
        'nbre_enfant',
    ];

    public function metiers()
    {
        return $this->hasMany(Metier::class);
    }
    public function centresInteret()
    {
        return $this->belongsToMany(CentreInteret::class, 'acteur_centre_interet', 'id_acteur', 'id_centre_interet');
    }
    // Relation avec le modèle Demenagement
    public function demenagements()
    {
        return $this->hasMany(Demenagement::class, 'id_acteur');
    }
    public function competences()
    {
        return $this->belongsToMany(Competence::class, 'acteur_competence', 'id_acteur', 'id_competence');
    }
    public function amenagements()
    {
        return $this->hasMany(Amenagement::class, 'id_acteur');
    }

    public function offresEmploi()
    {
        return $this->hasMany(OffreEmploi::class, 'id_acteur');
    }


}
