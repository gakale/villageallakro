<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acteur;
class Demenagement extends Model
{
    use HasFactory;

    // Relation avec le modèle Acteur
    public function acteur()
    {
        return $this->belongsTo(Acteur::class, 'id_acteur');
    }
}
