<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acteur;
class Opportunite extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_opportunite',
        'description',
        'date_disponibilite',
        'prix',
        'id_acteur',
        'localisation',
        'etat',
        'photo',
        'statut',
    ];

    public function acteur()
    {
        return $this->belongsTo(Acteur::class);
    }
}
