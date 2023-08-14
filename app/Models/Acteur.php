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
use App\Models\InformationAffaire;
use App\Models\InformationCommunautaire;
use App\Models\Opportunite;
use App\Models\Artisanale;
use App\Models\PromotionArtisanale;

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

    public function informationsAffaires()
    {
        return $this->hasMany(InformationAffaire::class, 'id_acteur');
    }

    public function informationsCommunautaires()
    {
        return $this->hasMany(InformationCommunautaire::class, 'id_acteur');
    }

    public function opportunites()
    {
        return $this->hasMany(Opportunite::class, 'id_acteur');
    }

    public function artisanale(){
        return $this->hasMany(Artisanale::class, 'id_acteur');
    }

    public function promotionArtisanale(){
        return $this->hasMany(PromotionArtisanale::class, 'id_acteur');
    }
}
