<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\CentreSante;
use App\Models\PeriodeGarde;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pharmacie extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'adresse',
        'telephone',
        'email',
        'horaire_ouverture',
        'horaire_fermeture',
        'responsable',
        'image',
        'statut',
        'id_centre_sante',
    ];

    public function CentreSante():belongsTo
    {
        return $this->belongsTo(CentreSante::class);
    }

    public function PeriodeGarde():hasMany
    {
        return $this->hasMany(PeriodeGarde::class);
    }
}
