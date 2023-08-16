<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement_vie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_acteur',
        'id_evenement',
        'date_debut',
        'date_fin',
        'description',
    ];

    public function acteur()
    {
        return $this->belongsTo(Acteur::class);
    }
}
