<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;

    public function acteurs()
    {
        return $this->belongsToMany(Acteur::class, 'acteur_competence', 'id_competence', 'id_acteur');
    }


}
